<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use JeffreyKroonen\BolRetailer\Enums\Orders\FulfilmentMethods;
use JeffreyKroonen\BolRetailer\Generated\Model\_Return;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\ReturnNormalizer;
use JeffreyKroonen\BolRetailer\Interfaces\ReturnsInterface;
use JeffreyKroonen\BolRetailer\Utilities\Paginate;

class Returns extends BaseEndpoint implements ReturnsInterface
{
    protected string $endpoint = '/returns';

    /**
     * Get a paginated list of multi-item returns. Handled returns are sorted by date in descending order,
     * while unhandled returns are sorted by date in ascending order.
     *
     * @param int $page
     * @param bool $handled
     * @param FulfilmentMethods $fulfillmentMethod
     * @return Paginate
     */
    public function returns(
        int $page = 1,
        bool $handled = false,
        FulfilmentMethods $fulfillmentMethod = FulfilmentMethods::FBR
    ): Paginate {
        $this->checkAuthentication();

        $response = $this->http->get($this->getRetailerEndpointUrl(), [
            'page' => $page,
            'handled' => $handled,
            'fulfilment-method' => $fulfillmentMethod->value,
        ]);
        $returnsData = $this->http->jsonDecodeBody($response);

        $paginate = new Paginate();
        $paginate->setPage($page);

        foreach ($returnsData['returns'] as $returnData) {
            // print_r($returnData); exit;
            $order = (new ReturnNormalizer())->denormalize(
                data: $returnData,
                class: _Return::class
            );

            $paginate->push($order);
        }

        return $paginate;
    }
}
