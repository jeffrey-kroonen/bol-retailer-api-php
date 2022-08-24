<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Endpoints;

use DateTime;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use JeffreyKroonen\BolRetailer\Endpoints\Subscriptions;
use JeffreyKroonen\BolRetailer\Enums\subscriptions\ResourceTypes;
use JeffreyKroonen\BolRetailer\Exceptions\UnauthorizedException;
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

        // @todo Add enum for "event types", so that we can check this in the test.
        // @todo Add enum for "statuses", so that we can check this in the test.

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
}
