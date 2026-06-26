<?php

namespace WlSdk\Wl\Business\Sms\Settings;

use WlSdk\WlSdkClient;

/**
 * Resets A2P Brand.
 */
class SmsAdminBrandReset
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
     * @return SmsAdminBrandResetPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsAdminBrandResetPostRequest $request): SmsAdminBrandResetPostResponse
    {
        return new SmsAdminBrandResetPostResponse($this->client->request('/Wl/Business/Sms/Settings/SmsAdminBrandReset.json', $request->params(), 'POST'));
    }
}
