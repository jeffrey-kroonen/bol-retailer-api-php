<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Endpoints;

use DateTime;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use JeffreyKroonen\BolRetailer\Endpoints\Returns;
use JeffreyKroonen\BolRetailer\Enums\FulfilmentTypes;
use JeffreyKroonen\BolRetailer\Exceptions\UnauthorizedException;
use JeffreyKroonen\BolRetailer\Generated\Model\_Return;
use JeffreyKroonen\BolRetailer\Interfaces\MockInterface;
use JeffreyKroonen\BolRetailer\Tests\Traits\AuthMock;
use JeffreyKroonen\BolRetailer\Tests\Traits\EndpointMock;
use JeffreyKroonen\BolRetailer\Utilities\Auth;
use JeffreyKroonen\BolRetailer\Utilities\Http;
use JeffreyKroonen\BolRetailer\Utilities\Paginate;
use PHPUnit\Framework\TestCase;
use ReflectionObject;

final class ReturnsTest extends TestCase implements MockInterface
{
    use AuthMock;
    use EndpointMock;

    private const MOCK_BOL_RETURN_ID = '1';

    public function testReturnsShouldBeRetrieved(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockreturnsHandler = $this->mockReturnsResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        // When
        $returnsEndpoint = new Returns(auth: $auth);
        $returnsEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockreturnsHandler)]))
        );

        $returns = $returnsEndpoint->returns(handled: true);

        // Then
        $this->assertInstanceOf(Paginate::class, $returns);
        $this->assertIsString($returns->data[0]->getReturnId());
        $this->assertInstanceOf(DateTime::class, $returns->data[0]->getRegistrationDateTime());
        $this->assertIsArray($returns->data[0]->getReturnItems());
    }

    public function testReturnsShouldNotBeRetrievedWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        // Given
        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($this->mockAuthSuccessResponseHandler())]));
        $auth->authenticate();

        $returnsEndpoint = new Returns(auth: $auth);
        $returnsEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($this->mockReturnsResponseHandler())]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $returnsEndpoint->returns(handled: true);
    }

    public function testReturnByIdShouldBeRetrieved(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockReturnsHandler = $this->mockReturnByIdResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $returnsEndpoint = new Returns(auth: $auth);
        $returnsEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockReturnsHandler)]))
        );

        // When
        $return = $returnsEndpoint->returnById(self::MOCK_BOL_RETURN_ID);

        // Then
        $this->assertInstanceOf(_Return::class, $return);
        $this->assertIsString($return->getReturnId());
        $this->assertInstanceOf(DateTime::class, $return->getRegistrationDateTime());
        $this->assertTrue(in_array($return->getFulfilmentMethod(), [
            FulfilmentTypes::FBR->value,
            FulfilmentTypes::FBB->value,
        ]));
        $this->assertIsArray($return->getReturnItems());
        $this->assertIsString($return->getReturnItems()[0]['orderId']);
    }

    public function testReturnByIdShouldNotBeRetrievedWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockReturnsHandler = $this->mockReturnByIdResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $returnsEndpoint = new Returns(auth: $auth);
        $returnsEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockReturnsHandler)]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $returnsEndpoint->returnById(self::MOCK_BOL_RETURN_ID);
    }
}
