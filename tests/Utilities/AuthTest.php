<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Utilities;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use JeffreyKroonen\BolRetailer\Enums\HeaderAuthorizationTypes;
use JeffreyKroonen\BolRetailer\Enums\ScopeTypes;
use JeffreyKroonen\BolRetailer\Exceptions\ResponseException;
use JeffreyKroonen\BolRetailer\Tests\Concerns\AuthMock;
use JeffreyKroonen\BolRetailer\Utilities\Auth;
use PHPUnit\Framework\TestCase;

final class AuthTest extends TestCase
{
    use AuthMock;

    private const MOCK_CREDENTIALS = 'mock_credentials';
    private const MOCK_CLIENT_ID = 'mock_client_id';
    private const MOCK_CLIENT_SECRET = 'mock_client_secret';
    private const MOCK_ACCESS_TOKEN = 'mock_access_token';

    public function testShouldBeAbleToAuthenticateAtBolDotCom(): void
    {
        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler();

        $client = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $shouldBeClient = $client->authenticate();

        // Then
        $this->assertInstanceOf(Auth::class, $shouldBeClient);
    }

    public function testAuthenticationShouldFailWhenBolclientidIsNotSet(): void
    {
        // Then
        $this->expectError();

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler();

        $client = (new Auth())->setBolClientSecret(self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();
    }

    public function testAuthenticationShouldFailWhenBolclientsecretIsNotSet(): void
    {
        // Then
        $this->expectError();

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler();
        $client = (new Auth())->setBolClientId(self::MOCK_CLIENT_ID);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();
    }

    public function testAuthenticationShouldFailWhenResponseBodyIsEmpty(): void
    {
        // Then
        $this->expectException(ResponseException::class);

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler([]);
        $client = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();

        $this->assertInstanceOf(Auth::class, $client);
    }

    public function testAuthenticationShouldFailWhenAccesstokenIsMissing(): void
    {
        // Then
        $this->expectException(ResponseException::class);

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler([
            'token_type' => HeaderAuthorizationTypes::BEARER->value,
            'expires_in' => 299,
            'scope' => ScopeTypes::RETAILER->value,
        ]);
        $client = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();

        $this->assertInstanceOf(Auth::class, $client);
    }

    public function testAuthenticationShouldFailWhenTokentypeIsMissing(): void
    {
        // Then
        $this->expectException(ResponseException::class);

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler([
            'access_token' => self::MOCK_ACCESS_TOKEN,
            'expires_in' => 299,
            'scope' => ScopeTypes::RETAILER->value,
        ]);
        $client = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();

        $this->assertInstanceOf(Auth::class, $client);
    }

    public function testAuthenticationShouldFailWhenExpiresinIsMissing(): void
    {
        // Then
        $this->expectException(ResponseException::class);

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler([
            'access_token' => self::MOCK_ACCESS_TOKEN,
            'token_type' => HeaderAuthorizationTypes::BEARER->value,
            'scope' => ScopeTypes::RETAILER->value,
        ]);
        $client = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();

        $this->assertInstanceOf(Auth::class, $client);
    }

    public function testAuthenticationShouldFailWhenScopeIsMissing(): void
    {
        // Then
        $this->expectException(ResponseException::class);

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler([
            'access_token' => self::MOCK_ACCESS_TOKEN,
            'token_type' => HeaderAuthorizationTypes::BEARER->value,
            'expires_in' => 299,
        ]);
        $client = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();

        $this->assertInstanceOf(Auth::class, $client);
    }

    public function testAuthenticationShouldFailWhenAccesstokenIsNotEqualToBearer(): void
    {
        // Then
        $this->expectException(ResponseException::class);

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler([
            'access_token' => self::MOCK_ACCESS_TOKEN,
            'token_type' => 'mock_fake_token_type',
            'expires_in' => 299,
            'scope' => ScopeTypes::RETAILER->value,
        ]);
        $client = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();

        $this->assertInstanceOf(Auth::class, $client);
    }

    public function testAuthenticationShouldFailWhenScopeIsNotEqualRetailer(): void
    {
        // Then
        $this->expectException(ResponseException::class);

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler([
            'access_token' => self::MOCK_ACCESS_TOKEN,
            'token_type' => HeaderAuthorizationTypes::BASIC->value,
            'expires_in' => 299,
            'scope' => 'mock_fake_scope',
        ]);
        $client = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();

        $this->assertInstanceOf(Auth::class, $client);
    }

    public function testAuthenticationShouldFailWhenExpiresinIsNotAnInteger(): void
    {
        // Then
        $this->expectException(ResponseException::class);

        // Given
        $mockHandler = $this->mockAuthSuccessResponseHandler([
            'access_token' => self::MOCK_ACCESS_TOKEN,
            'token_type' => HeaderAuthorizationTypes::BASIC->value,
            'expires_in' => 'not_an_integer',
            'scope' => ScopeTypes::RETAILER->value,
        ]);
        $client = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $client->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockHandler)]));

        // When
        $client->authenticate();

        $this->assertInstanceOf(Auth::class, $client);
    }
}
