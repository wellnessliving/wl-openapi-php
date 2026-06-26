<?php

namespace WlSdk\Wl\Purchase\Item;

use WlSdk\WlSdkClient;

/**
 * Gets information about purchase and it's items.
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
     * Gets information about purchase and it's items.
     *
     * @return PurchaseItemListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseItemListGetRequest $request): PurchaseItemListGetResponse
    {
        return new PurchaseItemListGetResponse($this->client->request('/Wl/Purchase/Item/PurchaseItemList.json', $request->params(), 'GET'));
    }
}
