<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach;

class ListGetResponseList
{
    /**
     * Type of account holder. One of {@link \WlSdk\RsPayBankAchHolderSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayBankAchHolderSid
     */
    public ?int $id_pay_bank_ach_holder = null;

    /**
     * Type of account. One of {@link \WlSdk\RsPayBankAchTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayBankAchTypeSid
     */
    public ?int $id_pay_bank_ach_type = null;

    /**
     * `true` - this account is default payment method; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * ID of bank account. Primary key in RsPayBankSql.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    /**
     * Account name.
     *
     * @var string|null
     */
    public ?string $text_name_account = null;

    /**
     * Account holder name.
     *
     * @var string|null
     */
    public ?string $text_name_holder = null;

    /**
     * ACH account number.
     *
     * @var string|null
     */
    public ?string $text_number = null;

    public function __construct(array $data)
    {
        $this->id_pay_bank_ach_holder = isset($data['id_pay_bank_ach_holder']) ? (int)$data['id_pay_bank_ach_holder'] : null;
        $this->id_pay_bank_ach_type = isset($data['id_pay_bank_ach_type']) ? (int)$data['id_pay_bank_ach_type'] : null;
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->k_pay_bank = isset($data['k_pay_bank']) ? (string)$data['k_pay_bank'] : null;
        $this->text_name_account = isset($data['text_name_account']) ? (string)$data['text_name_account'] : null;
        $this->text_name_holder = isset($data['text_name_holder']) ? (string)$data['text_name_holder'] : null;
        $this->text_number = isset($data['text_number']) ? (string)$data['text_number'] : null;
    }
}
