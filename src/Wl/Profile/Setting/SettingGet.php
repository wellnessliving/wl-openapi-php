<?php
namespace WlSdk\Wl\Profile\Setting;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of user settings and other additional information for the settings page.
 */
class SettingGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of user settings and other additional information for the settings page.
     *
     * Returns the user's current notification preferences for the business, covering account
     *  activity, news, and schedule reminders across email and SMS channels, along with the
     *  user's current language setting.
     *
     * @return SettingGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SettingGetRequest $request): SettingGetResponse
    {
        return new SettingGetResponse($this->client->request('/Wl/Profile/Setting/Setting.json', $request->params(), 'GET'));
    }
}
