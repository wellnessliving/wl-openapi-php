<?php

namespace WlSdk\Wl\Family\Pay;

use WlSdk\WlSdkClient;

/**
 * Gets data about who pays for a given user.
 */
class Pay
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets data about who pays for a given user.
     *
     * @return PayGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PayGetRequest $request): PayGetResponse
    {
        return new PayGetResponse($this->client->request('/Wl/Family/Pay/Pay.json', $request->params(), 'GET'));
    }

    /**
     * Sets that user `uid_payer` pays for user `uid`.
     *
     * @return PayPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PayPostRequest $request): PayPostResponse
    {
        return new PayPostResponse($this->client->request('/Wl/Family/Pay/Pay.json', $request->params(), 'POST'));
    }
}
