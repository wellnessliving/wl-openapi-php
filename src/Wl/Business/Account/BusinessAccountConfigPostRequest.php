<?php

namespace WlSdk\Wl\Business\Account;

class BusinessAccountConfigPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of subscription settings.
     *
     * Keys are CID of the subscription type and values are arrays of the payments for this subscription required
     * for
     * SubscriptionWrite::gather()
     *
     * @var array|null
     */
    public ?array $a_subscription = null;

    /**
     * Trial details to be modified.
     *
     * Array with next structure if trial details should be modified:
     *
     *
     * Empty array if trial details should not be modified.
     *
     * @var array|null
     */
    public ?array $a_trial_detail = null;

    /**
     * Additional tax amount value.
     *
     * @var string|null
     */
    public ?string $f_tax = null;

    /**
     * Number of days to show alert about failed payment.
     *
     * @var int|null
     */
    public ?int $i_alert_fee = null;

    /**
     * Number of days after which business should be terminated.
     *
     * @var int|null
     */
    public ?int $i_alert_termination = null;

    /**
     * Whether alert about failed payment should be shown to business owner.
     *
     * @var bool|null
     */
    public ?bool $is_alert_fee = null;

    /**
     * Whether alert about business future termination should be shown to business owner.
     *
     * @var bool|null
     */
    public ?bool $is_alert_termination = null;

    /**
     * Whether business local currency should be used instead of system currency.
     *
     * @var bool|null
     */
    public ?bool $is_currency_locale = null;

    /**
     * Whether additional taxes should be used.
     *
     * @var bool|null
     */
    public ?bool $is_tax = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_subscription' => $this->a_subscription,
            'a_trial_detail' => $this->a_trial_detail,
            'f_tax' => $this->f_tax,
            'i_alert_fee' => $this->i_alert_fee,
            'i_alert_termination' => $this->i_alert_termination,
            'is_alert_fee' => $this->is_alert_fee,
            'is_alert_termination' => $this->is_alert_termination,
            'is_currency_locale' => $this->is_currency_locale,
            'is_tax' => $this->is_tax,
            ],
            static fn ($v) => $v !== null
        );
    }
}
