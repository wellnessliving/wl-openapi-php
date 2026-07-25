<?php

namespace WlSdk\Wl\Profile\Setting;

class SettingPostRequest
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
    public ?bool $is_account_management_email = true;

    /**
     * Determines whether SMS notifications related to purchases, contracts, and other activity in a client's
     * account are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_account_management_sms = true;

    /**
     * Determines whether email notifications related to news and updates from the business regarding their
     * services, availability, and promotions are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_news_and_updates_email = true;

    /**
     * Whether sms notifications related to news and updates from the business regarding their services,
     * availability and promotions are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_news_and_updates_sms = true;

    /**
     * Determines whether email notifications related to the services a client has booked are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_schedule_and_reminders_email = true;

    /**
     * Determines whether SMS notifications related to the services a client has booked are enabled.
     *
     * @var bool|null
     */
    public ?bool $is_schedule_and_reminders_sms = true;

    public function params(): array
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
            static fn ($v) => $v !== null
        );
    }
}
