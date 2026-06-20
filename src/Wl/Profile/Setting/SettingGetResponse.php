<?php

namespace WlSdk\Wl\Profile\Setting;

/**
 * Response from GET
 */
class SettingGetResponse
{
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

    /**
     * SID of language code.
     *
     * @var string|null
     */
    public ?string $text_language = null;

    public function __construct(array $data)
    {
        $this->is_account_management_email = isset($data['is_account_management_email']) ? (bool)$data['is_account_management_email'] : null;
        $this->is_account_management_sms = isset($data['is_account_management_sms']) ? (bool)$data['is_account_management_sms'] : null;
        $this->is_news_and_updates_email = isset($data['is_news_and_updates_email']) ? (bool)$data['is_news_and_updates_email'] : null;
        $this->is_news_and_updates_sms = isset($data['is_news_and_updates_sms']) ? (bool)$data['is_news_and_updates_sms'] : null;
        $this->is_schedule_and_reminders_email = isset($data['is_schedule_and_reminders_email']) ? (bool)$data['is_schedule_and_reminders_email'] : null;
        $this->is_schedule_and_reminders_sms = isset($data['is_schedule_and_reminders_sms']) ? (bool)$data['is_schedule_and_reminders_sms'] : null;
        $this->text_language = isset($data['text_language']) ? (string)$data['text_language'] : null;
    }
}
