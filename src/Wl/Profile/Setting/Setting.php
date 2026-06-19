<?php
namespace WlSdk\Wl\Profile\Setting;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of user settings and other additional information for the settings page.
 */
class Setting
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

    /**
     * Saves the user's notification settings for the specified business.
     *
     * Saves the user's notification preferences for the business, updating email and SMS opt-in
     *  settings for account activity, news, and schedule reminders.
     *
     * @return SettingPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SettingPostRequest $request): SettingPostResponse
    {
        return new SettingPostResponse($this->client->request('/Wl/Profile/Setting/Setting.json', $request->params(), 'POST'));
    }
}
