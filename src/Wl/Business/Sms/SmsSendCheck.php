<?php

namespace WlSdk\Wl\Business\Sms;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Sms/SmsSendCheck.json
 */
class SmsSendCheck
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Business/Sms/SmsSendCheck.json.
     *
     * @return SmsSendCheckPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsSendCheckPostRequest $request): SmsSendCheckPostResponse
    {
        return new SmsSendCheckPostResponse($this->client->request('/Wl/Business/Sms/SmsSendCheck.json', $request->params(), 'POST'));
    }
}
