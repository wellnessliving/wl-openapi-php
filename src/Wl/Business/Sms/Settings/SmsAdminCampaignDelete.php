<?php

namespace WlSdk\Wl\Business\Sms\Settings;

use WlSdk\WlSdkClient;

/**
 * Resets A2P Brand.
 */
class SmsAdminCampaignDelete
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
     * @return SmsAdminCampaignDeletePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsAdminCampaignDeletePostRequest $request): SmsAdminCampaignDeletePostResponse
    {
        return new SmsAdminCampaignDeletePostResponse($this->client->request('/Wl/Business/Sms/Settings/SmsAdminCampaignDelete.json', $request->params(), 'POST'));
    }
}
