<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use JeffreyKroonen\BolRetailer\Generated\Model\Order;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\OrderNormalizer;
use JeffreyKroonen\BolRetailer\Interfaces\OrdersInterface;

class Orders extends BaseEndpoint implements OrdersInterface
{
    protected string $endpoint = '/orders';

    /**
     * Gets a paginated list of all orders for a retailer.
     *
     * @return array
     */
    public function orders(int $page = 1): array // @todo Make an enum for statuses, we have to give the status as parameter here.
    {
        $this->checkAuthentication();

        $response = $this->http->get($this->getRetailerEndpointUrl());
        $ordersData = $this->http->jsonDecodeBody($response);

        // @todo Move this to a separate class.
        $data = [
            'orders' => [],
            'meta' => [
                'current_page' => $page,
                'next_page' => $page + 1,
            ],
        ];

        if ($page > 1) {
            $data['meta']['previous_page'] = $page - 1;
        }

        foreach ($ordersData as $orderData) {
            $data['orders'][] = (new OrderNormalizer())->denormalize(
                data: $orderData,
                class: Order::class
            );
        }

        return $data;
    }
}
