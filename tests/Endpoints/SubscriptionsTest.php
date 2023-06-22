<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Endpoints;

use DateTime;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use JeffreyKroonen\BolRetailer\Endpoints\Subscriptions;
use JeffreyKroonen\BolRetailer\Enums\Subscriptions\EventTypes;
use JeffreyKroonen\BolRetailer\Enums\Subscriptions\ResourceTypes;
use JeffreyKroonen\BolRetailer\Enums\Subscriptions\StatusTypes;
use JeffreyKroonen\BolRetailer\Exceptions\UnauthorizedException;
use JeffreyKroonen\BolRetailer\Generated\Model\KeySet;
use JeffreyKroonen\BolRetailer\Generated\Model\ProcessStatus;
use JeffreyKroonen\BolRetailer\Generated\Model\SubscriptionResponse;
use JeffreyKroonen\BolRetailer\Interfaces\MockInterface;
use JeffreyKroonen\BolRetailer\Tests\Traits\AuthMock;
use JeffreyKroonen\BolRetailer\Tests\Traits\EndpointMock;
use JeffreyKroonen\BolRetailer\Utilities\Auth;
use JeffreyKroonen\BolRetailer\Utilities\Http;
use PHPUnit\Framework\TestCase;
use ReflectionObject;

class SubscriptionsTest extends TestCase implements MockInterface
{
    use AuthMock;
    use EndpointMock;

    private const MOCK_BOL_SUBSCRIPTION_ID = '1234';

    public function testSubscriptionsShouldBeRetrieved(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionsHandler = $this->mockSubscriptionsHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        // When
        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionsHandler)]))
        );
        $subscriptions = $subscriptionEndpoint->subscriptions();

        /**
         * @var SubscriptionResponse $subscription
         */
        $subscription = $subscriptions[0];

        // Then
        $this->assertIsString($subscription->getId());
        $this->assertEquals(self::MOCK_BOL_SUBSCRIPTION_ID, $subscription->getId());
        $this->assertIsArray($subscription->getResources());
        $this->assertEquals(ResourceTypes::PROCESS_STATUS->value, $subscription->getResources()[0]);
        $this->assertIsString($subscription->getUrl());
    }

    public function testSubscriptionsShouldNotBeRetrievedWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionsHandler = $this->mockSubscriptionsHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionsHandler)]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $subscriptionEndpoint->subscriptions();
    }

    public function testSubscriptionByIdShouldBeRetrieved(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionByIdHandler = $this->mockSubscriptionByIdResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        // When
        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionByIdHandler)]))
        );
        $subscription = $subscriptionEndpoint->subscriptionById(self::MOCK_BOL_SUBSCRIPTION_ID);

        // Then
        $this->assertIsString($subscription->getId());
        $this->assertEquals(self::MOCK_BOL_SUBSCRIPTION_ID, $subscription->getId());
        $this->assertIsArray($subscription->getResources());
        $this->assertEquals(ResourceTypes::PROCESS_STATUS->value, $subscription->getResources()[0]);
        $this->assertIsString($subscription->getUrl());
    }

    public function testSubscriptionByIdShouldNotBeRetrievedWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionByIdHandler = $this->mockSubscriptionByIdResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionByIdHandler)]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $subscriptionEndpoint->subscriptionById(self::MOCK_BOL_SUBSCRIPTION_ID);
    }

    public function testItShouldBePossibleToCreateASubscription(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscribeHandler = $this->mockSubscribeResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        // When
        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscribeHandler)]))
        );
        $processStatus = $subscriptionEndpoint->subscribe([ResourceTypes::PROCESS_STATUS->value], 'https://example.com');

        // Then
        $this->assertInstanceOf(ProcessStatus::class, $processStatus);
        $this->assertIsString($processStatus->getProcessStatusId());
        $this->assertEquals(EventTypes::CREATE_SUBSCRIPTION->value, $processStatus->getEventType());
        $this->assertEquals(StatusTypes::PENDING->value, $processStatus->getStatus());
        $this->assertInstanceOf(DateTime::class, $processStatus->getCreateTimestamp());
        $this->assertIsArray($processStatus->getLinks());
    }

    public function testItShouldNotBePossibleToCreateASubscriptionWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionHandler = $this->mockSubscribeResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionHandler)]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $subscriptionEndpoint->subscribe([ResourceTypes::PROCESS_STATUS->value], 'https://example.com');
    }

    public function testItShouldBePossibleToDeleteASubscription(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionDeletionHandler = $this->mockSubscriptionDeletionResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        // When
        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionDeletionHandler)]))
        );
        $processStatus = $subscriptionEndpoint->delete(self::MOCK_BOL_SUBSCRIPTION_ID);

        // Then
        $this->assertInstanceOf(ProcessStatus::class, $processStatus);
        $this->assertIsString($processStatus->getProcessStatusId());
        $this->assertEquals(EventTypes::DELETE_SUBSCRIPTION->value, $processStatus->getEventType());
        $this->assertEquals(StatusTypes::PENDING->value, $processStatus->getStatus());
        $this->assertInstanceOf(DateTime::class, $processStatus->getCreateTimestamp());
        $this->assertIsArray($processStatus->getLinks());
    }

    public function testItShouldNotBePossibleToDeleteASubscriptionWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionDeletionHandler = $this->mockSubscriptionDeletionResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionDeletionHandler)]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $subscriptionEndpoint->delete(self::MOCK_BOL_SUBSCRIPTION_ID);
    }

    public function testSignatureKeysShouldBeRetrieved(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionHandler = $this->mockSignatureKeysResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        // When
        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionHandler)]))
        );
        $signatureKeys = $subscriptionEndpoint->signatureKeys();

        /**
         * @var KeySet $signatureKey
         */
        $signatureKey = $signatureKeys[0];

        $this->assertIsArray($signatureKeys);
        $this->assertIsString($signatureKey->getId());
        $this->assertEquals('RSA', $signatureKey->getType());
        $this->assertIsString($signatureKey->getPublicKey());
    }

    public function testSignatureKeysShouldNotBeRetrievedWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionHandler = $this->mockSignatureKeysResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionHandler)]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $subscriptionEndpoint->signatureKeys();
    }

    public function testTriggerPushNotificationShouldRespondWithAProcessStatus(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionHandler = $this->mockSignatureKeysResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        // When
        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionHandler)]))
        );
        $processStatus = $subscriptionEndpoint->triggerPushNotification();

        $this->assertInstanceOf(ProcessStatus::class, $processStatus);
    }

}
