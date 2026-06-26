<?php

namespace WlSdk\Wl\Login\Promotion\PayMethod;

class AutopayMethodPutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * `true` if Account payment method should be used, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_account = null;

    /**
     * `true` if Default payment method should be used, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Card/ACH recurrent payment token. Empty when Default or Account payment method should be used.
     *
     * @var string|null
     */
    public ?string $k_pay_recurrent = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'is_account' => $this->is_account,
            'is_default' => $this->is_default,
            'k_pay_recurrent' => $this->k_pay_recurrent,
            ],
            static fn ($v) => $v !== null
        );
    }
}
