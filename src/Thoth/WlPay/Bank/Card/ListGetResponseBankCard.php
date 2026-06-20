<?php

namespace WlSdk\Thoth\WlPay\Bank\Card;

class ListGetResponseBankCard
{
    /**
     * The month when the payment card expires, represented by a number (1=January and 12=December).
     *
     * @var int|null
     */
    public ?int $i_month = null;

    /**
     * The last two digits of the year when the payment card expires.
     *
     * @var int|null
     */
    public ?int $i_year = null;

    /**
     * The card system ID. This is one of the {@link \WlSdk\ACardSystemSid} constants.
     *
     * @var int|null
     */
    public ?int $id_card_system = null;

    /**
     * If `true`, then this card is the user default card.
     * If `false`, then this isn't the user default card.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * The payment address ID. This refers to a physical address associated with a payment card.
     *
     * @var string|null
     */
    public ?string $k_pay_address = null;

    /**
     * The payment method ID. Each payment card for each user will have its own ID.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    /**
     * The payment card descriptor. This is typically the company name and the last 4 digits of the card
     * (for example, visa-5903).
     *
     * @var string|null
     */
    public ?string $text_name_card = null;

    /**
     * The name of the card owner as it appears on the card.
     *
     * @var string|null
     */
    public ?string $text_name_holder = null;

    /**
     * A portion of the payment card number, used to identify the card.
     * This is typically the last 4 digits of the card number.
     *
     * @var string|null
     */
    public ?string $text_number = null;

    public function __construct(array $data)
    {
        $this->i_month = isset($data['i_month']) ? (int)$data['i_month'] : null;
        $this->i_year = isset($data['i_year']) ? (int)$data['i_year'] : null;
        $this->id_card_system = isset($data['id_card_system']) ? (int)$data['id_card_system'] : null;
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->k_pay_address = isset($data['k_pay_address']) ? (string)$data['k_pay_address'] : null;
        $this->k_pay_bank = isset($data['k_pay_bank']) ? (string)$data['k_pay_bank'] : null;
        $this->text_name_card = isset($data['text_name_card']) ? (string)$data['text_name_card'] : null;
        $this->text_name_holder = isset($data['text_name_holder']) ? (string)$data['text_name_holder'] : null;
        $this->text_number = isset($data['text_number']) ? (string)$data['text_number'] : null;
    }
}
