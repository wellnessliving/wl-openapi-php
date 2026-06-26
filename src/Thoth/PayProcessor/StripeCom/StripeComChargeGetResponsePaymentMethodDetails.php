<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

class StripeComChargeGetResponsePaymentMethodDetails
{
    /**
     * ID of a card payment method generated.
     *
     * @var string|null
     */
    public ?string $s_generated_card_id = null;

    /**
     * Card brand, like visa or mastercard.
     *
     * @var string|null
     */
    public ?string $text_brand = null;

    /**
     * The cardholder name as read from the card.
     *
     * @var string|null
     */
    public ?string $text_cardholder_name = null;

    /**
     * Two-digit number representing the card's expiration month.
     *
     * @var string|null
     */
    public ?string $text_exp_month = null;

    /**
     * Four-digit number representing the card's expiration year.
     *
     * @var string|null
     */
    public ?string $text_exp_year = null;

    /**
     * Last four digits of the card number.
     *
     * @var string|null
     */
    public ?string $text_last4 = null;

    public function __construct(array $data)
    {
        $this->s_generated_card_id = isset($data['s_generated_card_id']) ? (string)$data['s_generated_card_id'] : null;
        $this->text_brand = isset($data['text_brand']) ? (string)$data['text_brand'] : null;
        $this->text_cardholder_name = isset($data['text_cardholder_name']) ? (string)$data['text_cardholder_name'] : null;
        $this->text_exp_month = isset($data['text_exp_month']) ? (string)$data['text_exp_month'] : null;
        $this->text_exp_year = isset($data['text_exp_year']) ? (string)$data['text_exp_year'] : null;
        $this->text_last4 = isset($data['text_last4']) ? (string)$data['text_last4'] : null;
    }
}
