<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Tests\Traits;

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

    private function mockOrderByIdResponseHandler(): MockHandler
    {
        return new MockHandler([
            new Response(HttpResponse::HTTP_OK, [
                'Accept' => Http::HEADER_APPLICATION_CONTENT_TYPE_JSON  ,
                'Authorization' => sprintf('%s %s', HeaderAuthorizationTypes::BEARER->value, self::MOCK_CREDENTIALS),
            ], '
            {
                "orderId": "A2K8290LP8",
                "pickupPoint": true,
                "orderPlacedDateTime": "2017-02-09T12:39:48+01:00",
                "shipmentDetails": {
                    "pickupPointName": "Albert Heijn: UTRECHT",
                    "salutation": "MALE",
                    "firstName": "Billie",
                    "surname": "Jansen",
                    "streetName": "Dorpstraat",
                    "houseNumber": "1",
                    "houseNumberExtension": "B",
                    "extraAddressInformation": "Apartment",
                    "zipCode": "1111ZZ",
                    "city": "Utrecht",
                    "countryCode": "NL",
                    "email": "billie@verkopen.bol.com",
                    "company": "bol.com",
                    "deliveryPhoneNumber": "012123456",
                    "language": "nl"
                },
                "billingDetails": {
                    "salutation": "MALE",
                    "firstName": "Billie",
                    "surname": "Jansen",
                    "streetName": "Dorpstraat",
                    "houseNumber": "1",
                    "houseNumberExtension": "B",
                    "extraAddressInformation": "Apartment",
                    "zipCode": "1111ZZ",
                    "city": "Utrecht",
                    "countryCode": "NL",
                    "email": "billie@verkopen.bol.com",
                    "company": "bol.com",
                    "vatNumber": "NL999999999B99",
                    "kvkNumber": "99887766",
                    "orderReference": "MijnReferentie"
                },
                "orderItems": [{}]
            }
            ')
        ]);
    }
}
