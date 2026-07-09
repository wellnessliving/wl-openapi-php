<?php

namespace WlSdk\Wl\Pay\Account\Charge;

class ChargePostRequest
{
    /**
     * The account charge mode.
     *
     * One of the {@link \WlSdk\RsPayAccountChargeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayAccountChargeSid
     */
    public ?int $id_pay_account_charge = null;

    /**
     * If `true`, the account is filled by a staff member in the backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * The ID of the business the user account belongs to.
     *
     * This shouldn't be passed if a user account has already been created.
     * In such cases, {@link \WlSdk\Thoth\WlPay\Account\Charge\Charge} should be passed instead.
     *
     * If both the business ID and account ID passed, the system checks if the given business is the owner of the
     * specified account.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The ID of the user account to refill.
     *
     * This may be 0 if a user account hasn't been created yet.
     * In such cases, {@link \WlSdk\Thoth\WlPay\Account\Charge\Charge} and {@link
     * \WlSdk\Thoth\WlPay\Account\Charge\Charge} should be passed instead.
     *
     * If not passed, the currency of account equals the default business currency.
     *
     * @var string|null
     */
    public ?string $k_pay_account = null;

    /**
     * The ID of the user whose account is being refilled.
     *
     * This shouldn't be passed if a user account has already been created.
     * In such cases, {@link \WlSdk\Thoth\WlPay\Account\Charge\Charge} should be passed instead.
     *
     * If both the user ID and account ID passed, the system checks if the given user is the owner of the specified
     * account.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * A list of payment sources to pay with.
     *
     * Each element has next keys:
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * The source mode key. One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * The payment amount.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * The transaction comment.
     *
     * @var string|null
     */
    public ?string $s_comment = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_pay_account_charge' => $this->id_pay_account_charge,
            'is_staff' => $this->is_staff,
            'k_business' => $this->k_business,
            'k_pay_account' => $this->k_pay_account,
            'uid' => $this->uid,
            'a_pay_form' => $this->a_pay_form,
            'id_mode' => $this->id_mode,
            'm_amount' => $this->m_amount,
            's_comment' => $this->s_comment,
            ],
            static fn ($v) => $v !== null
        );
    }
}
