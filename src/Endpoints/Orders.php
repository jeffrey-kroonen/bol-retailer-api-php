<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use JeffreyKroonen\BolRetailer\Enums\FulfilmentTypes;
use JeffreyKroonen\BolRetailer\Enums\Orders\StatusTypes;
use JeffreyKroonen\BolRetailer\Generated\Model\Order;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\OrderNormalizer;
use JeffreyKroonen\BolRetailer\Interfaces\OrdersInterface;
use JeffreyKroonen\BolRetailer\Utilities\Paginate;

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
            $order = (new OrderNormalizer())->denormalize(
                data: $orderData,
                class: Order::class
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

        return (new OrderNormalizer())->denormalize(
            data: $orderData,
            class: Order::class
        );
    }
}
