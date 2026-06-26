<?php

namespace WlSdk\Wl\Promotion\Purchase;

use WlSdk\WlSdkClient;

/**
 * Gets list of promotions.
 */
class PurchaseList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of promotions.
     *
     * @return PurchaseListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseListGetRequest $request): PurchaseListGetResponse
    {
        return new PurchaseListGetResponse($this->client->request('/Wl/Promotion/Purchase/PurchaseList.json', $request->params(), 'GET'));
    }
}
