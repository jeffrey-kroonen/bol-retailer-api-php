<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Concerns;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use JeffreyKroonen\BolRetailer\Enums\HeaderAuthorizationTypes;
use JeffreyKroonen\BolRetailer\Enums\ScopeTypes;
use JeffreyKroonen\BolRetailer\Utilities\Http;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

trait EndpointMock
{
    private function mockOrdersResponseHandler(?array $body = null): MockHandler
    {
        return new MockHandler([
            new Response(HttpResponse::HTTP_OK, [
                'Accept' => Http::HEADER_APPLICATION_CONTENT_TYPE_JSON  ,
                'Authorization' => sprintf('%s %s', HeaderAuthorizationTypes::BEARER->value, self::MOCK_CREDENTIALS),
            ], '
            {
                "orders": [{
                    "orderId": "A2K8290LP8",
                    "orderPlacedDateTime": "2017-02-09T12:39:48+01:00",
                    "orderItems": [{
                        "orderItemId": "2012345678",
                        "ean": "0000007740404",
                        "quantity": 10,
                        "quantityShipped": 10,
                        "quantityCancelled": 0
                    }]
                }]
            }
            ')
        ]);
    }
}
