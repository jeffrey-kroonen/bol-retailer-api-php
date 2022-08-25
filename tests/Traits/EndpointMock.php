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

    private function mockReturnsResponseHandler(): MockHandler
    {
        return new MockHandler([
            new Response(HttpResponse::HTTP_OK, [
                'Accept' => Http::HEADER_APPLICATION_CONTENT_TYPE_JSON  ,
                'Authorization' => sprintf('%s %s', HeaderAuthorizationTypes::BEARER->value, self::MOCK_CREDENTIALS),
            ], '
            {
                "returns": [{
                    "returnId": "1",
                    "registrationDateTime": "2016-11-14T11:06:48+01:00",
                    "fulfilmentMethod": "FBR",
                    "returnItems": [{
                        "rmaId": "31234567",
                        "orderId": "4012345678",
                        "ean": "9789076174082",
                        "expectedQuantity": 1,
                        "returnReason": {
                            "mainReason": "Niet naar verwachting",
                            "detailedReason": "Niet naar verwachting",
                            "customerComments": "Lorem Ipsum"
                        },
                        "handled": true,
                        "processingResults": [{
                            "quantity": 1,
                            "processingResult": "ACCEPTED",
                            "handlingResult": "RETURN_RECEIVED",
                            "processingDateTime": "2018-04-17T10:55:37+02:00"
                        }]
                    }]
                }]
            }
            ')
        ]);
    }

    private function mockReturnByIdResponseHandler(): MockHandler
    {
        return new MockHandler([
            new Response(HttpResponse::HTTP_OK, [
                'Accept' => Http::HEADER_APPLICATION_CONTENT_TYPE_JSON  ,
                'Authorization' => sprintf('%s %s', HeaderAuthorizationTypes::BEARER->value, self::MOCK_CREDENTIALS),
            ], '
            {
                "returnId": "1",
                "registrationDateTime": "2016-11-14T11:06:48+01:00",
                "fulfilmentMethod": "FBR",
                "returnItems": [{
                    "rmaId": "31234567",
                    "orderId": "4012345678",
                    "ean": "9789076174082",
                    "title": "Harry Potter en de steen der wijzen",
                    "expectedQuantity": 1,
                    "returnReason": {
                        "mainReason": "Niet naar verwachting",
                        "detailedReason": "Niet naar verwachting",
                        "customerComments": "Lorem Ipsum"
                    },
                    "trackAndTrace": "3SBOL0987654321",
                    "transporterName": "PostNL",
                    "handled": true,
                    "processingResults": [{
                        "quantity": 1,
                        "processingResult": "ACCEPTED",
                        "handlingResult": "RETURN_RECEIVED",
                        "processingDateTime": "2018-04-17T10:55:37+02:00"
                    }],
                    "customerDetails": {
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
                        "deliveryPhoneNumber": "012123456",
                        "company": "bol.com",
                        "vatNumber": "NL999999999B99"
                    }
                }]
            }
            ')
        ]);
    }

    public function mockSubscriptionResponseHandler(): MockHandler
    {
        return new MockHandler([
            new Response(HttpResponse::HTTP_OK, [
                'Accept' => Http::HEADER_APPLICATION_CONTENT_TYPE_JSON  ,
                'Authorization' => sprintf('%s %s', HeaderAuthorizationTypes::BEARER->value, self::MOCK_CREDENTIALS),
            ], '
            {
                "processStatusId": "1",
                "eventType": "CREATE_SUBSCRIPTION",
                "description": "Create push notification subscription.",
                "status": "PENDING",
                "createTimestamp": "2022-08-22T11:32:12+02:00",
                "links": [{
                    "rel": "self",
                    "href": "http://api.bol.com/shared-demo/process-status/1",
                    "method": "GET"
                }]
            }
            ')
        ]);
    }

    public function mockSignatureKeysResponseHandler(): MockHandler
    {
        return new MockHandler([
            new Response(HttpResponse::HTTP_OK, [
                'Accept' => Http::HEADER_APPLICATION_CONTENT_TYPE_JSON  ,
                'Authorization' => sprintf('%s %s', HeaderAuthorizationTypes::BEARER->value, self::MOCK_CREDENTIALS),
            ], '
            {
                "signatureKeys": [{
                    "id": "0",
                    "type": "RSA",
                    "publicKey": "MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCDO7X3OGEqB6LU2ZQdznuYJX1KhCiJUB0+IwW9UjcgbU2Y/LzUIgGPT33s/+OqqMQOtXp2RV4JM6Zv5/YUZgZAqEIkvvrIYvJB8tXv73VQS2r4Ssy3Y/frJsqy8a3sDOoFeJygHYE6kVf3sOCdo4CO6PFUe7ZwsOSS2/7fNWAaMhY6tEuZwkA7ZLoSd3UHTdeKlV1TH5I3yFClMo1FwABsWzj9DhvEb6Q36j+QLJZAj0xvusJUsOjcSgyXRzVBFtwwNILzs9BO+GWRI4li+rjhaST2pNtvGfnQB5TUOO7Yegk/ucSiV1cFzy95gWQV2F0c9P1vBctETrYKxQBklBbjAgMBAAECggEAGISLVoi9/nA2x7VuqrLs/FvksItIV38UN4urgtddXT2OhcqSLL+9styTFjgofLXTCzx0iKwlCWsQ6U9Y9i6pdGL7GIplqBJ0WEXaGl2OeVXdwk2XOZv/sXsp24yzhapT/nmuKWvZvOtyl9//1vO5DPoQPExwpVUnHxji4SjDr6DuKVNDwh9Z4mVsdfdYVeLYGJ356IGWhTu/JDie4byl8B75UgbmyvfJRjQkoLpVZuhu+jkmhogpoSl6NtaKA+iFlGT9JLtGVHDn15kdEHb+dtzTzyJH40KGjQ7OiZcmA8GFft6zrNlOpyziH7fICtt0//7fR348/Z+XIYUFqfadQQKBgQDeVnqAlkt2Uab/1OjX9O8CRWqdoFLpUGDiHhkaXEylJtm1osFHGiyOi1eEQOy//lnJWKUp7c0b8D/QioP7kI38ES1mBx1KDzFgob4p/U+4R+z24SV/Q3CT6vHbfbe1XxWvE4SOdh4p7+Kuhxz1n6P0TWltvsTbpCJ9GM4wi2Z26QKBgQCXGiObkJI4Wv6RGxq76BHEDZdrLWppXh1+FYfyUaq6bfcSF86yAIRlleEJUh1V8KDw2DCX0rhO3BW0juEl5qz5RohLIxuak+2RbX6IQrVPwtCCeGQzKIRPktht+fi+eSaa5XNMLXURTzjVUdxzFwqDKp+7YQWL8DJ6qEfJGGYX6wKBgBXM8PIOypNtaiyHmdUjBRR57fxKrhaGdRl2zgtRpYpEBvDSZpUsMdZAP3KOUyh4LiGZ+Yfk80mcAwXVrx9Ji0J+BK+OXwbV+od5FIZVei2dj9SdOuoBmNZIITLeXtb/3cZu6X52gnqmNNncEbDb2F2qAX5rSC4pJ+CQQBduc7uRAoGAHzjxfqWi8S4sSAOXxJgxg5djYGwj/t3JrlH4o2OoqZkrYnu05CcjNHKB65EiKq3sM5gYgmayWukzOvoDH/fIakHey9fXTluezVwYt0NBf9e7ihoiakfG/0JSonbypTkXdw5OgsEp3YfHMJ0XtlhefbgDBY8IvF/HrnyzSKRYBD0CgYBlq6nIEZOIqngHdtskT8JOZBcniVPGjUjSiNcYQXfeMwKINUqDGC/YmpPgBOhO93ozeQTCBeeMD8nlbkTHPu7BxCCfpKj6/PPMfxmyFQyDg9ZjjHOIhUMddRw+mSq0zS212JbIr3O4eEtrXPqWfq5phxyE3dRvaX3A3wiEQN9WRA=="
                }]
            }
            ')
        ]);
    }
}
