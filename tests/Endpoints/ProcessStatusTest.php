<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Endpoints;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use JeffreyKroonen\BolRetailer\Endpoints\ProcessStatus;
use JeffreyKroonen\BolRetailer\Enums\Subscriptions\EventTypes;
use JeffreyKroonen\BolRetailer\Enums\Subscriptions\StatusTypes;
use JeffreyKroonen\BolRetailer\Exceptions\UnauthorizedException;
use JeffreyKroonen\BolRetailer\Generated\Model\ProcessStatus as ModelProcessStatus;
use JeffreyKroonen\BolRetailer\Interfaces\MockInterface;
use JeffreyKroonen\BolRetailer\Tests\Traits\AuthMock;
use JeffreyKroonen\BolRetailer\Tests\Traits\EndpointMock;
use JeffreyKroonen\BolRetailer\Utilities\Auth;
use JeffreyKroonen\BolRetailer\Utilities\Http;
use PHPUnit\Framework\TestCase;
use ReflectionObject;

class ProcessStatusTest extends TestCase implements MockInterface
{
    use AuthMock;
    use EndpointMock;

    private const MOCK_PROCESS_STATUS_ID = '1234567';

    public function testProcessStatusByIdShouldBeRetrieved(): void
    {
        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockProcessStatusByIdHandler = $this->mockProcessStatusByIdResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $processStatusEndpoint = new ProcessStatus(auth: $auth);
        $processStatusEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockProcessStatusByIdHandler)]))
        );

        // When
        $processStatus = $processStatusEndpoint->processStatusById(self::MOCK_PROCESS_STATUS_ID);

        // Then
        $this->assertInstanceOf(ModelProcessStatus::class, $processStatus);
        $this->assertIsString($processStatus->getProcessStatusId());
        $this->assertIsString($processStatus->getEntityId());
        $this->assertTrue(in_array($processStatus->getEventType(), array_column(EventTypes::cases(), 'value')));
        $this->assertTrue(in_array($processStatus->getStatus(), array_column(StatusTypes::cases(), 'value')));
    }

    public function testProcessStatusByIdShouldNotBeRetrievedWhenUnauthorized(): void
    {
        // Then
        $this->expectException(UnauthorizedException::class);

        // Given
        $mockAuthHandler = $this->mockAuthSuccessResponseHandler();
        $mockProcessStatusByIdHandler = $this->mockProcessStatusByIdResponseHandler();

        $auth = new Auth(self::MOCK_CLIENT_ID, self::MOCK_CLIENT_SECRET);
        $auth->getHttp()->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockAuthHandler)]));
        $auth->authenticate();

        $processStatusEndpoint = new ProcessStatus(auth: $auth);
        $processStatusEndpoint->setHttp(
            (new Http())->setHttpClient(new HttpClient(['handler' => HandlerStack::create($mockProcessStatusByIdHandler)]))
        );

        // When
        $authReflection = new ReflectionObject($auth);
        $expiresInReflectionProperty = $authReflection->getProperty('expiresIn');
        $expiresInReflectionProperty->setAccessible(true);
        $expiresInReflectionProperty->setValue($auth, time() - 301);

        $processStatus = $processStatusEndpoint->processStatusById(self::MOCK_PROCESS_STATUS_ID);
    }
}

