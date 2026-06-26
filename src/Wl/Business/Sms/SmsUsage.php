<?php

namespace WlSdk\Wl\Business\Sms;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Sms/SmsUsage.json
 */
class SmsUsage
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Sms/SmsUsage.json.
     *
     * @return SmsUsageGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SmsUsageGetRequest $request): SmsUsageGetResponse
    {
        return new SmsUsageGetResponse($this->client->request('/Wl/Business/Sms/SmsUsage.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Business/Sms/SmsUsage.json.
     *
     * @return SmsUsagePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsUsagePostRequest $request): SmsUsagePostResponse
    {
        return new SmsUsagePostResponse($this->client->request('/Wl/Business/Sms/SmsUsage.json', $request->params(), 'POST'));
    }
}
