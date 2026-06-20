<?php
namespace WlSdk\Thoth\WlPay\Account;

class AccountGetResponseAccountNx
{
    /**
     * `true` if the account is allowed to have a negative balance, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_negative = null;

    /**
     * Currency ID. One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     *
     * @var int|null
     */
    public ?int $id_currency = null;

    /**
     * Currency key.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Payment account key. `null` for accounts not yet created.
     *
     * @var string|null
     */
    public ?string $k_pay_account = null;

    /**
     * Custom payment method key. `null` for accounts based on the system payment method.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * Account balance. Always `'0.00'` for accounts not yet created.
     *
     * @var string|null
     */
    public ?string $m_rest = null;

    /**
     * Name of the custom payment method. `null` for accounts based on the system payment method.
     *
     * @var string|null
     */
    public ?string $s_method = null;

    public function __construct(array $data)
    {
        $this->can_negative = isset($data['can_negative']) ? (bool)$data['can_negative'] : null;
        $this->id_currency = isset($data['id_currency']) ? (int)$data['id_currency'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->k_pay_account = isset($data['k_pay_account']) ? (string)$data['k_pay_account'] : null;
        $this->k_pay_method = isset($data['k_pay_method']) ? (string)$data['k_pay_method'] : null;
        $this->m_rest = isset($data['m_rest']) ? (string)$data['m_rest'] : null;
        $this->s_method = isset($data['s_method']) ? (string)$data['s_method'] : null;
    }
}
