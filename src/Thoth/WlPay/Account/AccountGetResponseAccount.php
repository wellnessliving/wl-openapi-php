<?php

namespace WlSdk\Thoth\WlPay\Account;

class AccountGetResponseAccount
{
    /**
     * Currency ID. One of {@link \WlSdk\Core\Locale\CurrencySid} constant.
     *
     * @var int|null
     */
    public ?int $id_currency = null;

    /**
     * Key of account currency.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * ID of payment account.  `null` if this is a user account based on system payment method.
     *
     * @var string|null
     */
    public ?string $k_pay_account = null;

    /**
     * ID of custom payment method. `null` if this is a user account based on system payment method.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * Account balance.
     *
     * @var string|null
     */
    public ?string $m_rest = null;

    /**
     * Name of a custom payment method. `null` if this is a user account based on system payment method.
     *
     * @var string|null
     */
    public ?string $s_method = null;

    public function __construct(array $data)
    {
        $this->id_currency = isset($data['id_currency']) ? (int)$data['id_currency'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->k_pay_account = isset($data['k_pay_account']) ? (string)$data['k_pay_account'] : null;
        $this->k_pay_method = isset($data['k_pay_method']) ? (string)$data['k_pay_method'] : null;
        $this->m_rest = isset($data['m_rest']) ? (string)$data['m_rest'] : null;
        $this->s_method = isset($data['s_method']) ? (string)$data['s_method'] : null;
    }
}
