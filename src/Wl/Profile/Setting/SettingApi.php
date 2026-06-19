<?php
namespace WlSdk\Wl\Profile\Setting;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of user settings and other additional information for the settings page.
 */
class SettingApi
{
    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Determines whether email notifications related to purchases, contracts, and other activity in a client's
     * account are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_account_management_email = null;

    /**
     * Determines whether SMS notifications related to purchases, contracts, and other activity in a client's
     * account are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_account_management_sms = null;

    /**
     * Determines whether email notifications related to news and updates from the business regarding their
     * services, availability, and promotions are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_news_and_updates_email = null;

    /**
     * Whether sms notifications related to news and updates from the business regarding their services,
     * availability and promotions are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_news_and_updates_sms = null;

    /**
     * Determines whether email notifications related to the services a client has booked are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_schedule_and_reminders_email = null;

    /**
     * Determines whether SMS notifications related to the services a client has booked are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_schedule_and_reminders_sms = null;

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
     * @return SettingApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): SettingApiGetResponse
    {
        return new SettingApiGetResponse($this->client->request('/Wl/Profile/Setting/Setting.json', $this->params(), 'GET'));
    }

    /**
     * Saves the user's notification settings for the specified business.
     *
     * Saves the user's notification preferences for the business, updating email and SMS opt-in
     *  settings for account activity, news, and schedule reminders.
     *
     * @return SettingApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): SettingApiPostResponse
    {
        return new SettingApiPostResponse($this->client->request('/Wl/Profile/Setting/Setting.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'is_account_management_email' => $this->is_account_management_email,
            'is_account_management_sms' => $this->is_account_management_sms,
            'is_news_and_updates_email' => $this->is_news_and_updates_email,
            'is_news_and_updates_sms' => $this->is_news_and_updates_sms,
            'is_schedule_and_reminders_email' => $this->is_schedule_and_reminders_email,
            'is_schedule_and_reminders_sms' => $this->is_schedule_and_reminders_sms,
            ],
            static fn($v) => $v !== null
        );
    }
}
