<?php

namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Updates SMS settings to define whether individual sms status is enabled or disabled for this business.
 */
class Settings
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates SMS settings to define whether individual sms status is enabled or disabled for this business.
     *
     * @return SettingsPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SettingsPostRequest $request): SettingsPostResponse
    {
        return new SettingsPostResponse($this->client->request('/Wl/Business/Phone/Settings.json', $request->params(), 'POST'));
    }
}
