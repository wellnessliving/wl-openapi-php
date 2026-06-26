<?php

namespace WlSdk\Thoth\WlPay\Refund;

use WlSdk\WlSdkClient;

/**
 * Returns form data for a page to perform refund operation.
 */
class Refund
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns form data for a page to perform refund operation.
     *
     * @return RefundGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RefundGetRequest $request): RefundGetResponse
    {
        return new RefundGetResponse($this->client->request('/Thoth/WlPay/Refund/Refund.json', $request->params(), 'GET'));
    }

    /**
     * Processes refund operation.
     *
     * @return RefundPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RefundPostRequest $request): RefundPostResponse
    {
        return new RefundPostResponse($this->client->request('/Thoth/WlPay/Refund/Refund.json', $request->params(), 'POST'));
    }
}
