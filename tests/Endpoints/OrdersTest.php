<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Utilities;

use DateTime;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use JeffreyKroonen\BolRetailer\Endpoints\Orders;
use JeffreyKroonen\BolRetailer\Exceptions\UnauthorizedException;
use JeffreyKroonen\BolRetailer\Generated\Model\Order;
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

    private const MOCK_BOL_ORDER_ID = 'A2K8290LP8';

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
        $this->assertIsString($orders->data[0]->getOrderId());
        $this->assertInstanceOf(DateTime::class, $orders->data[0]->getOrderPlacedDateTime());
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

    public function testOrderByIdShouldBeRetrieved(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockOrdersHandler = $this->mockOrderByIdResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $ordersEndpoint = new Orders(auth: $auth);
        $ordersEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockOrdersHandler)]))
        );

        // When
        $order = $ordersEndpoint->orderById(self::MOCK_BOL_ORDER_ID);

        // Then
        $this->assertInstanceOf(Order::class, $order);
        $this->assertIsString($order->getOrderId());
        $this->assertInstanceOf(DateTime::class, $order->getOrderPlacedDateTime());
        $this->assertIsArray($order->getShipmentDetails());
        $this->assertIsArray($order->getBillingDetails());
        $this->assertIsArray($order->getOrderItems());
    }

    public function testOrderbyIdShouldNotBeRetrievedWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockOrdersHandler = $this->mockOrderByIdResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $ordersEndpoint = new Orders(auth: $auth);
        $ordersEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockOrdersHandler)]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $ordersEndpoint->orderById(self::MOCK_BOL_ORDER_ID);
    }
}
