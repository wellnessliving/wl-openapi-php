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
     * Validates the purchase and checks that the current user has access to it: either being the
     *  purchase owner, or a staff member with the `rs.purchase.item.list` privilege, or location
     *  access when the purchase belongs to a location. Depending on
     *  {@link \WlSdk\Wl\Purchase\Item\PurchaseItemList}, returns either a compact list of purchase items with
     *  plain amounts, or a fully formatted set of items and totals (discount, subtotal, surcharge,
     *  tax, tip, total) with `HTML`-formatted money values and additional business and client
     *  contact information for receipts.
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
