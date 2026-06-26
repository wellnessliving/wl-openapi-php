<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach\Add;

class AddPostResponsePayBank
{
    /**
     * Whether current user can remove payment method.
     * `true` if user can remove payment methods.
     * `false` if user cannot remove payment methods.
     *
     * @var bool|null
     */
    public ?bool $can_remove = null;

    /**
     * Type of recurrent payment token. One of {@link \WlSdk\RsPayBankSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayBankSid
     */
    public ?int $id_pay_bank = null;

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
     * Billing address. Primary key in RsPayAddressSql.
     *
     * @var string|null
     */
    public ?string $k_pay_address = null;

    /**
     * ID of bank account. Primary key in RsPayBankSql.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    /**
     * Region ID. Primary key in AGeoSql table.
     *
     * @var string|null
     */
    public ?string $k_region = null;

    /**
     * Name of city.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * Name of country.
     *
     * @var string|null
     */
    public ?string $text_country = null;

    /**
     * Account nickname.
     *
     * @var string|null
     */
    public ?string $text_name = null;

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

    /**
     * Phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Postal code.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * Name of region.
     *
     * @var string|null
     */
    public ?string $text_region = null;

    /**
     * Street address line 1.
     *
     * @var string|null
     */
    public ?string $text_street1 = null;

    /**
     * Street address line 2.
     *
     * @var string|null
     */
    public ?string $text_street2 = null;

    public function __construct(array $data)
    {
        $this->can_remove = isset($data['can_remove']) ? (bool)$data['can_remove'] : null;
        $this->id_pay_bank = isset($data['id_pay_bank']) ? (int)$data['id_pay_bank'] : null;
        $this->id_pay_bank_ach_holder = isset($data['id_pay_bank_ach_holder']) ? (int)$data['id_pay_bank_ach_holder'] : null;
        $this->id_pay_bank_ach_type = isset($data['id_pay_bank_ach_type']) ? (int)$data['id_pay_bank_ach_type'] : null;
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->k_pay_address = isset($data['k_pay_address']) ? (string)$data['k_pay_address'] : null;
        $this->k_pay_bank = isset($data['k_pay_bank']) ? (string)$data['k_pay_bank'] : null;
        $this->k_region = isset($data['k_region']) ? (string)$data['k_region'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_country = isset($data['text_country']) ? (string)$data['text_country'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_name_account = isset($data['text_name_account']) ? (string)$data['text_name_account'] : null;
        $this->text_name_holder = isset($data['text_name_holder']) ? (string)$data['text_name_holder'] : null;
        $this->text_number = isset($data['text_number']) ? (string)$data['text_number'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_region = isset($data['text_region']) ? (string)$data['text_region'] : null;
        $this->text_street1 = isset($data['text_street1']) ? (string)$data['text_street1'] : null;
        $this->text_street2 = isset($data['text_street2']) ? (string)$data['text_street2'] : null;
    }
}
