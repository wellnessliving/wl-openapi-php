<?php

namespace WlSdk\Wl\Pay\Bank\Ach\Widget;

class WidgetSelectGetResponsePayBank
{
    /**
     * Address key of the bank account.
     *
     * @var string|null
     */
    public ?string $k_pay_address = null;

    /**
     * Bank account key.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    /**
     * Region key, or empty string if the address has no region.
     *
     * @var string|null
     */
    public ?string $k_region = null;

    /**
     * Part of the bank account number.
     *
     * @var string|null
     */
    public ?string $s_number = null;

    /**
     * Bank account nickname.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * `true` if this is the default bank account, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Name of the account holder.
     *
     * @var string|null
     */
    public ?string $text_name_holder = null;

    /**
     * City of the billing address.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * Phone number of the billing address.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Postal code of the billing address.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * First line of the billing street address.
     *
     * @var string|null
     */
    public ?string $text_street1 = null;

    /**
     * Second line of the billing street address.
     *
     * @var string|null
     */
    public ?string $text_street2 = null;

    /**
     * Region title.
     *
     * @var string|null
     */
    public ?string $text_region = null;

    public function __construct(array $data)
    {
        $this->k_pay_address = isset($data['k_pay_address']) ? (string)$data['k_pay_address'] : null;
        $this->k_pay_bank = isset($data['k_pay_bank']) ? (string)$data['k_pay_bank'] : null;
        $this->k_region = isset($data['k_region']) ? (string)$data['k_region'] : null;
        $this->s_number = isset($data['s_number']) ? (string)$data['s_number'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->text_name_holder = isset($data['text_name_holder']) ? (string)$data['text_name_holder'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_street1 = isset($data['text_street1']) ? (string)$data['text_street1'] : null;
        $this->text_street2 = isset($data['text_street2']) ? (string)$data['text_street2'] : null;
        $this->text_region = isset($data['text_region']) ? (string)$data['text_region'] : null;
    }
}
