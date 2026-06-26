<?php

namespace WlSdk\Wl\Business\Sms\Settings;

use WlSdk\WlSdkClient;

/**
 * Updates SMS opt-out.
 */
class SmsOptOut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates SMS opt-out.
     *
     * @return SmsOptOutPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(SmsOptOutPutRequest $request): SmsOptOutPutResponse
    {
        return new SmsOptOutPutResponse($this->client->request('/Wl/Business/Sms/Settings/SmsOptOut.json', $request->params(), 'PUT'));
    }
}
