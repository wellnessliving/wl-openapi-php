<?php

namespace WlSdk\Wl\Business\Sms\Settings;

use WlSdk\WlSdkClient;

/**
 * Resubmits A2P Application.
 */
class SmsAdminApplicationResubmit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Resubmits A2P Application.
     *
     * @return SmsAdminApplicationResubmitPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsAdminApplicationResubmitPostRequest $request): SmsAdminApplicationResubmitPostResponse
    {
        return new SmsAdminApplicationResubmitPostResponse($this->client->request('/Wl/Business/Sms/Settings/SmsAdminApplicationResubmit.json', $request->params(), 'POST'));
    }
}
