<?php
namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Builds a single-item purchase list from the scalar input fields and delegates to the parent for price calculation.
 */
class PurchaseElementGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Builds a single-item purchase list from the scalar input fields and delegates to the parent for price calculation.
     *
     * Constructs a one-element `a_purchase_item` array from the individual scalar GET fields (purchase item type,
     * item key, session count, prize keys, and installment template), then delegates to
     * `get()` to compute the price breakdown for that item.
     *
     * @return PurchaseElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseElementGetRequest $request): PurchaseElementGetResponse
    {
        return new PurchaseElementGetResponse($this->client->request('/Wl/Book/Process/Purchase/PurchaseElement.json', $request->params(), 'GET'));
    }
}
