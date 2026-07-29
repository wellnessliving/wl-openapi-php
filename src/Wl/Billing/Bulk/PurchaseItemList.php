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

    /**
     * Prepares the bulk billing review: the per-client totals and the list of clients that will be billed.
     *
     * Validates access to the business, calculates the per-client subtotal, tax and total for the selected
     * purchase
     *  items, and collects each client contact data and payment method label. Clients that a selected item is not
     *  available to (by their client type or member group) are removed from billing and returned in
     *  {@link \WlSdk\Wl\Billing\Bulk\PurchaseItemListPostResponse::$a_client_restrict}. Clients that are not
     * eligible for the selected introductory
     *  items are flagged with `is_warning` and described in {@link
     * \WlSdk\Wl\Billing\Bulk\PurchaseItemListPostResponse::$a_client_bill} (`a_warning`
     *  key).
     *
     * @return PurchaseItemListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PurchaseItemListPostRequest $request): PurchaseItemListPostResponse
    {
        return new PurchaseItemListPostResponse($this->client->request('/Wl/Billing/Bulk/PurchaseItemList.json', $request->params(), 'POST'));
    }
}
