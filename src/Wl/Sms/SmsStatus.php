<?php

namespace WlSdk\Wl\Sms;

use WlSdk\WlSdkClient;

/**
 * Returns information about SMS settings.
 */
class SmsStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about SMS settings.
     *
     * @return SmsStatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SmsStatusGetRequest $request): SmsStatusGetResponse
    {
        return new SmsStatusGetResponse($this->client->request('/Wl/Sms/SmsStatus.json', $request->params(), 'GET'));
    }
}
