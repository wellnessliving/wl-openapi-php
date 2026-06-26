<?php

namespace WlSdk\Wl\Business\Account\Subscription\Sms;

/**
 * Response from GET
 */
class SmsSubscriptionGetResponse
{
    /**
     * Returns available trial days for the business.
     *
     * `0` if trial is not available.
     *
     * @var int|null
     */
    public ?int $i_trial_available = null;

    /**
     * Returns available trial days for the business.
     *
     * `0` if trial is not available.
     *
     * @var int|null
     */
    public ?int $i_trial_left = null;

    /**
     * Locale of the business.
     * One of {@link \WlSdk\Core\Locale\LocaleSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\LocaleSid
     */
    public ?int $id_locale = null;

    /**
     * New subscription plan. One of {@link \WlSdk\Wl\Business\Account\Subscription\Sms\SmsSubscriptionSid}
     * constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Sms\SmsSubscriptionSid
     */
    public ?int $id_plan = null;

    /**
     * URL to the page with phone setup instructions.
     *
     * @var string|null
     */
    public ?string $url_setup_phone = null;

    public function __construct(array $data)
    {
        $this->i_trial_available = isset($data['i_trial_available']) ? (int)$data['i_trial_available'] : null;
        $this->i_trial_left = isset($data['i_trial_left']) ? (int)$data['i_trial_left'] : null;
        $this->id_locale = isset($data['id_locale']) ? (int)$data['id_locale'] : null;
        $this->id_plan = isset($data['id_plan']) ? (int)$data['id_plan'] : null;
        $this->url_setup_phone = isset($data['url_setup_phone']) ? (string)$data['url_setup_phone'] : null;
    }
}
