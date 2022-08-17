<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Utilities;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use JeffreyKroonen\BolRetailer\Endpoints\Orders;
use JeffreyKroonen\BolRetailer\Tests\Concerns\AuthMock;
use JeffreyKroonen\BolRetailer\Tests\Concerns\EndpointMock;
use JeffreyKroonen\BolRetailer\Utilities\Auth;
use JeffreyKroonen\BolRetailer\Utilities\Http;
use JeffreyKroonen\BolRetailer\Utilities\Paginate;
use PHPUnit\Framework\TestCase;

final class OrdersTest extends TestCase
{
    use AuthMock;
    use EndpointMock;

    private const MOCK_CREDENTIALS = 'mock_credentials';
    private const MOCK_CLIENT_ID = 'mock_client_id';
    private const MOCK_CLIENT_SECRET = 'mock_client_secret';
    private const MOCK_ACCESS_TOKEN = 'mock_access_token';

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
        // @todo Write unit test
    }
}
