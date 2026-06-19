<?php
namespace WlSdk\Wl\Profile\Setting;

use WlSdk\WlSdkClient;

/**
 * Saves the user's notification settings for the specified business.
 */
class SettingPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
