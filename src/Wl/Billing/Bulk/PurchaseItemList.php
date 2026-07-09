<?php

namespace WlSdk\Wl\Billing\Bulk;

use WlSdk\WlSdkClient;

/**
 * Gets the list of promotions and products available at the location.
 */
class PurchaseItemList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the list of promotions and products available at the location.
     *
     * Validates access to the business, then loads promotions with their prices and products expanded into
     *  their options, keeping only the items available at the requested location.
     *
     * @return PurchaseItemListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseItemListGetRequest $request): PurchaseItemListGetResponse
    {
        return new PurchaseItemListGetResponse($this->client->request('/Wl/Billing/Bulk/PurchaseItemList.json', $request->params(), 'GET'));
    }
}
