<?php

namespace WlSdk\Wl\Business\Sms;

/**
 * Response from GET
 */
class SmsUsageGetResponse
{
    /**
     * SMS usage statistic.
     *
     * For details see return data of BusinessSms::getUsageLimitInfo() method.
     *
     * @var array|null
     */
    public ?array $a_usage_info = null;

    /**
     * Whether currently signed in staff has privilege to manage sms subscription.
     *
     * @var bool|null
     */
    public ?bool $has_access = null;

    /**
     * Whether current business is in SMS subscription trial period.
     *
     * @var bool|null
     */
    public ?bool $is_trial = null;

    /**
     * Whether sms usage limit message should be ignored.
     *
     * `null` if not set yet.
     *
     * @var bool|null
     */
    public ?bool $is_usage_limit_ignore = null;

    /**
     * Trial end date formatted according to business locale.
     *
     * Empty string if there is no active SMS subscription trial.
     *
     * @var string|null
     */
    public ?string $text_trial_end = null;

    /**
     * Url to 'Message Center' subscription plans.
     *
     * @var string|null
     */
    public ?string $url_subscription_plan = null;

    public function __construct(array $data)
    {
        $this->a_usage_info = isset($data['a_usage_info']) ? (array)$data['a_usage_info'] : null;
        $this->has_access = isset($data['has_access']) ? (bool)$data['has_access'] : null;
        $this->is_trial = isset($data['is_trial']) ? (bool)$data['is_trial'] : null;
        $this->is_usage_limit_ignore = isset($data['is_usage_limit_ignore']) ? (bool)$data['is_usage_limit_ignore'] : null;
        $this->text_trial_end = isset($data['text_trial_end']) ? (string)$data['text_trial_end'] : null;
        $this->url_subscription_plan = isset($data['url_subscription_plan']) ? (string)$data['url_subscription_plan'] : null;
    }
}
