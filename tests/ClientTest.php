<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use JeffreyKroonen\BolRetailer\Client;
use JeffreyKroonen\BolRetailer\Endpoints\Orders;
use JeffreyKroonen\BolRetailer\Endpoints\Returns;
use JeffreyKroonen\BolRetailer\Endpoints\Subscriptions;
use JeffreyKroonen\BolRetailer\Interfaces\MockInterface;
use JeffreyKroonen\BolRetailer\Tests\Traits\AuthMock;
use JeffreyKroonen\BolRetailer\Utilities\Auth;
use PHPUnit\Framework\TestCase;

final class ClientTest extends TestCase implements MockInterface
{
    use AuthMock;

    public function testTheClientCanBeInstantiated(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));

        // When
        $client = new Client();
        $client->setAuth(auth: $auth);

        // Then
        $this->assertInstanceOf(Client::class, $client);
    }

    public function testItShouldGiveAnEndpointOrders(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));

        // When
        $client = new Client();
        $client->setAuth(auth: $auth);
        $endpointOrders = $client->orders();

        // Then
        $this->assertInstanceOf(Orders::class, $endpointOrders);
    }

    public function testItShouldGiveAnEndpointReturns(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));

        // When
        $client = new Client();
        $client->setAuth(auth: $auth);
        $endpointReturns = $client->returns();

        // Then
        $this->assertInstanceOf(Returns::class, $endpointReturns);
    }

    public function testItShouldGiveAnEndpointSubscriptions(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));

        // When
        $client = new Client();
        $client->setAuth(auth: $auth);
        $endpointSubscriptions = $client->subscriptions();

        // Then
        $this->assertInstanceOf(Subscriptions::class, $endpointSubscriptions);
    }
}
