<?php

namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns the pricing breakdown for a list of purchase items, applying applicable discounts and taxes.
 */
class PurchaseElementList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the pricing breakdown for a list of purchase items, applying applicable discounts and taxes.
     *
     * Validates the business, location, and user, then for each item in `a_purchase_item_request` computes the
     * price,
     * applicable discount code reduction, login-type discount, and taxes, and returns per-item cost, discount,
     * price, tax, and subtotal amounts in `a_purchase_item_result`.
     *
     * @return PurchaseElementListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseElementListGetRequest $request): PurchaseElementListGetResponse
    {
        return new PurchaseElementListGetResponse($this->client->request('/Wl/Book/Process/Purchase/PurchaseElementList.json', $request->params(), 'GET'));
    }
}
