<?php

namespace WlSdk\Wl\Profile\Purchase;

use WlSdk\WlSdkClient;

/**
 * Changes state of the purchase option.
 */
class PurchaseItemCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes state of the purchase option.
     *
     * @return PurchaseItemCancelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PurchaseItemCancelPostRequest $request): PurchaseItemCancelPostResponse
    {
        return new PurchaseItemCancelPostResponse($this->client->request('/Wl/Profile/Purchase/PurchaseItemCancel.json', $request->params(), 'POST'));
    }
}
