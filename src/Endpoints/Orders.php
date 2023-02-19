<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use JeffreyKroonen\BolRetailer\Enums\FulfilmentTypes;
use JeffreyKroonen\BolRetailer\Enums\Orders\StatusTypes;
use JeffreyKroonen\BolRetailer\Generated\Model\Order;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\BillingDetailsNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\OrderFulfilmentNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\OrderNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\OrderOfferNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\OrderOrderItemNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\OrderProductNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\ShipmentDetailsNormalizer;
use JeffreyKroonen\BolRetailer\Interfaces\OrdersInterface;
use JeffreyKroonen\BolRetailer\Utilities\Paginate;
use Symfony\Component\Serializer\Serializer;

class Orders extends BaseEndpoint implements OrdersInterface
{
    protected string $endpoint = '/orders';

    /**
     * Gets a paginated list of all orders for a retailer.
     *
     * @param int $page
     * @param FulfilmentTypes $fulfillmentMethod
     * @param StatusTypes $status
     * @return Paginate
     */
    public function orders(
        int $page = 1,
        FulfilmentTypes $fulfillmentMethod = FulfilmentTypes::FBR,
        StatusTypes $status = StatusTypes::OPEN
    ): Paginate {
        $this->checkAuthentication();

        $response = $this->http->get($this->getRetailerEndpointUrl(), [
            'page' => $page,
            'fulfilment-method' => $fulfillmentMethod->value,
            'status' => $status->value
        ]);
        $ordersData = $this->http->jsonDecodeBody($response);

        $paginate = new Paginate();
        $paginate->setPage($page);

        foreach ($ordersData['orders'] as $orderData) {
            $order = $this->serializer()->denormalize(
                data: $orderData,
                type: Order::class
            );

            $paginate->push($order);
        }

        return $paginate;
    }

    /**
     * Get an order by order id.
     *
     * @param string $id The id of the order to get.
     * @return Order
     */
    public function orderById(string $id): Order
    {
        $this->checkAuthentication();

        $response = $this->http->get($this->getRetailerEndpointUrl("/{$id}"));
        $orderData = $this->http->jsonDecodeBody($response);

        return $this->serializer()->denormalize(
            data: $orderData,
            type: Order::class
        );
    }

    private function serializer(): Serializer
    {
        return new Serializer(
            normalizers: [
                new OrderNormalizer(),
                new ShipmentDetailsNormalizer(),
                new BillingDetailsNormalizer(),
                new OrderOrderItemNormalizer(),
                new OrderFulfilmentNormalizer(),
                new OrderOfferNormalizer(),
                new OrderProductNormalizer(),
            ]
        );
    }
}
