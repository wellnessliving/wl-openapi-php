<?php

namespace WlSdk\Thoth\WlPay\Bank;

use WlSdk\WlSdkClient;

/**
 * Sets a specified payment method as default.
 */
class Primary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sets a specified payment method as default.
     *
     * @return PrimaryPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(PrimaryPutRequest $request): PrimaryPutResponse
    {
        return new PrimaryPutResponse($this->client->request('/Thoth/WlPay/Bank/Primary.json', $request->params(), 'PUT'));
    }
}
