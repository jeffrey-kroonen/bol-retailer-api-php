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

    private const MOCK_BOL_PROCESS_STATUS_ID = '1';

    public function testItShouldBePossibleToCreateASubscription(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockSubscriptionHandler = $this->mockSubscriptionResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        // When
        $subscriptionEndpoint = new Subscriptions(auth: $auth);
        $subscriptionEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockSubscriptionHandler)]))
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
        $mockSubscriptionHandler = $this->mockSubscriptionResponseHandler();

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
}
