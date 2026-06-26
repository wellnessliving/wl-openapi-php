<?php

namespace WlSdk\Wl\Purchase\Item;

use WlSdk\WlSdkClient;

/**
 * Returns information about amounts of the purchase item.
 */
class PurchaseItemAmount
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about amounts of the purchase item.
     *
     * @return PurchaseItemAmountGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseItemAmountGetRequest $request): PurchaseItemAmountGetResponse
    {
        return new PurchaseItemAmountGetResponse($this->client->request('/Wl/Purchase/Item/PurchaseItemAmount.json', $request->params(), 'GET'));
    }
}
