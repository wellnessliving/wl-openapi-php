<?php

namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns the pricing breakdown (totals, taxes, and discounts) for the given list of purchase items.
 */
class PurchaseElementGroup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the pricing breakdown (totals, taxes, and discounts) for the given list of purchase items.
     *
     * Validates each item in `a_purchase_item` (type, key, installment eligibility, and prize applicability),
     * applies discount codes, login-type discounts, and installment adjustments, then accumulates price, subtotal,
     * discount, tax, and cost totals across all items and returns them as result fields.
     *
     * @return PurchaseElementGroupGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseElementGroupGetRequest $request): PurchaseElementGroupGetResponse
    {
        return new PurchaseElementGroupGetResponse($this->client->request('/Wl/Book/Process/Purchase/PurchaseElementGroup.json', $request->params(), 'GET'));
    }
}
