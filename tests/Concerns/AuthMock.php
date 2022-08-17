<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Concerns;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use JeffreyKroonen\BolRetailer\Enums\HeaderAuthorizationTypes;
use JeffreyKroonen\BolRetailer\Enums\ScopeTypes;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

trait AuthMock
{
    private function mockAuthSuccessResponseHandler(?array $body = null): MockHandler
    {
        return new MockHandler([
            new Response(HttpResponse::HTTP_OK, [
                'Accept' => 'application/json'  ,
                'Authorization' => sprintf('%s %s', HeaderAuthorizationTypes::BASIC->value, self::MOCK_CREDENTIALS),
            ], json_encode($body ?? [
                'access_token' => self::MOCK_ACCESS_TOKEN,
                'token_type' => HeaderAuthorizationTypes::BEARER->value,
                'expires_in' => 299,
                'scope' => ScopeTypes::RETAILER->value,
            ]))
        ]);
    }
}
