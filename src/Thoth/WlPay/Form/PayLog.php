<?php

namespace WlSdk\Thoth\WlPay\Form;

use WlSdk\WlSdkClient;

/**
 * Logs events occurred in the browser.
 */
class PayLog
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Logs events occurred in the browser.
     *
     * @return PayLogPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PayLogPostRequest $request): PayLogPostResponse
    {
        return new PayLogPostResponse($this->client->request('/Thoth/WlPay/Form/PayLog.json', $request->params(), 'POST'));
    }
}
