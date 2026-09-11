<?php

namespace WlSdk\Wl\Pay\Bank;

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
     * Validates that the payment method exists, is not removed, not expired, and not already default,
     * then verifies the acting user has access to the owning business or client profile before applying
     * the change and logging it to the payment method history.
     *
     * @return PrimaryPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(PrimaryPutRequest $request): PrimaryPutResponse
    {
        return new PrimaryPutResponse($this->client->request('/Wl/Pay/Bank/Primary.json', $request->params(), 'PUT'));
    }
}
