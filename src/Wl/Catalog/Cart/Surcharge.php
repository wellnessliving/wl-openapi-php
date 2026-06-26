<?php

namespace WlSdk\Wl\Catalog\Cart;

use WlSdk\WlSdkClient;

/**
 * Sets surcharge fee amount to pay and returns updated data.
 */
class Surcharge
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sets surcharge fee amount to pay and returns updated data.
     *
     * @return SurchargePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SurchargePostRequest $request): SurchargePostResponse
    {
        return new SurchargePostResponse($this->client->request('/Wl/Catalog/Cart/Surcharge.json', $request->params(), 'POST'));
    }
}
