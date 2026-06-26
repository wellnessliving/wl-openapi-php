<?php

namespace WlSdk\Wl\Business\Sms;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Sms/SmsSend.json
 */
class SmsSend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Business/Sms/SmsSend.json.
     *
     * @return SmsSendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsSendPostRequest $request): SmsSendPostResponse
    {
        return new SmsSendPostResponse($this->client->request('/Wl/Business/Sms/SmsSend.json', $request->params(), 'POST'));
    }
}
