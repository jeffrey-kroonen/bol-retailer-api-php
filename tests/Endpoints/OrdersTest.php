<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Utilities;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use JeffreyKroonen\BolRetailer\Endpoints\Orders;
use JeffreyKroonen\BolRetailer\Exceptions\UnauthorizedException;
use JeffreyKroonen\BolRetailer\Interfaces\MockInterface;
use JeffreyKroonen\BolRetailer\Tests\Traits\AuthMock;
use JeffreyKroonen\BolRetailer\Tests\Traits\EndpointMock;
use JeffreyKroonen\BolRetailer\Utilities\Auth;
use JeffreyKroonen\BolRetailer\Utilities\Http;
use JeffreyKroonen\BolRetailer\Utilities\Paginate;
use PHPUnit\Framework\TestCase;
use ReflectionObject;

final class OrdersTest extends TestCase implements MockInterface
{
    use AuthMock;
    use EndpointMock;

    public function testOrdersShouldBeRetrieved(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockOrdersHandler = $this->mockOrdersResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        // When
        $ordersEndpoint = new Orders(auth: $auth);
        $ordersEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockOrdersHandler)]))
        );

        $orders = $ordersEndpoint->orders();

        // Then
        $this->assertInstanceOf(Paginate::class, $orders);
        $this->assertNotNull($orders->data[0]->getOrderId());
        $this->assertIsArray($orders->data[0]->getOrderItems());
    }

    public function testOrdersShouldNotBeRetrievedWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        // Given
        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($this->mockAuthSuccessResponseHandler())]));
        $auth->authenticate();

        $ordersEndpoint = new Orders(auth: $auth);
        $ordersEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($this->mockOrdersResponseHandler())]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $ordersEndpoint->orders();
    }
}
