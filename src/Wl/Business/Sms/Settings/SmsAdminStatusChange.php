<?php

namespace WlSdk\Wl\Business\Sms\Settings;

use WlSdk\WlSdkClient;

/**
 * Resets A2P Brand.
 */
class SmsAdminStatusChange
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Resets A2P Brand.
     *
     * @return SmsAdminStatusChangePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsAdminStatusChangePostRequest $request): SmsAdminStatusChangePostResponse
    {
        return new SmsAdminStatusChangePostResponse($this->client->request('/Wl/Business/Sms/Settings/SmsAdminStatusChange.json', $request->params(), 'POST'));
    }
}
