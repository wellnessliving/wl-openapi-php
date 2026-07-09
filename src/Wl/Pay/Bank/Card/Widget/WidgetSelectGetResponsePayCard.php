<?php

namespace WlSdk\Wl\Pay\Bank\Card\Widget;

class WidgetSelectGetResponsePayCard
{
    /**
     * Payment card type enum case. `null` if card type is not set.
     *
     * @var int|null
     * @see \WlSdk\Thoth\WlPay\Bank\Card\CardTypeEnum
     */
    public ?int $eid_card_type = null;

    /**
     * Card expiration month.
     *
     * @var int|null
     */
    public ?int $i_month = null;

    /**
     * Card expiration year.
     *
     * @var int|null
     */
    public ?int $i_year = null;

    /**
     * Card system ID. One of {@link \WlSdk\Wl\Card\CardSystemSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Card\CardSystemSid
     */
    public ?int $id_card_system = null;

    /**
     * Payment card type ID. One of {@link \WlSdk\Thoth\WlPay\Bank\Card\CardTypeEnum} constants as int.
     *
     * @var int|null
     * @see \WlSdk\Thoth\WlPay\Bank\Card\CardTypeEnum
     */
    public ?int $id_card_type = null;

    /**
     * Payment processor ID. One of {@link \WlSdk\Thoth\PayProcessor\PayProcessorSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\PayProcessorSid
     */
    public ?int $id_pay_processor = null;

    /**
     * `true` if this card is the default payment method; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Billing address key.
     *
     * @var string|null
     */
    public ?string $k_pay_address = null;

    /**
     * Payment card key.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    /**
     * Recurrent payment token key.
     *
     * @var string|null
     */
    public ?string $k_pay_recurrent = null;

    /**
     * Billing region key.
     *
     * @var string|null
     */
    public ?string $k_region = null;

    /**
     * Card nickname. Auto-generated from card system and masked number if not explicitly set.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Partial card number.
     *
     * @var string|null
     */
    public ?string $s_number = null;

    /**
     * Card system SID. One of {@link \WlSdk\Wl\Card\CardSystemSid} constants as string.
     *
     * @var string|null
     */
    public ?string $sid_card_system = null;

    /**
     * Billing city.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * Country name resolved from the region's parent geo entity. Empty if region has no parent.
     *
     * @var string|null
     */
    public ?string $text_country = null;

    /**
     * Cardholder name.
     *
     * @var string|null
     */
    public ?string $text_holder = null;

    /**
     * Billing postal code.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * Public representation of the recurrent payment token, safe for browser output.
     *
     * @var string|null
     */
    public ?string $text_public_token = null;

    /**
     * Region name resolved from the region key. Empty if no region is set.
     *
     * @var string|null
     */
    public ?string $text_region = null;

    /**
     * Billing street address line 1.
     *
     * @var string|null
     */
    public ?string $text_street_1 = null;

    /**
     * Billing street address line 2.
     *
     * @var string|null
     */
    public ?string $text_street_2 = null;

    public function __construct(array $data)
    {
        $this->eid_card_type = isset($data['eid_card_type']) ? (int)$data['eid_card_type'] : null;
        $this->i_month = isset($data['i_month']) ? (int)$data['i_month'] : null;
        $this->i_year = isset($data['i_year']) ? (int)$data['i_year'] : null;
        $this->id_card_system = isset($data['id_card_system']) ? (int)$data['id_card_system'] : null;
        $this->id_card_type = isset($data['id_card_type']) ? (int)$data['id_card_type'] : null;
        $this->id_pay_processor = isset($data['id_pay_processor']) ? (int)$data['id_pay_processor'] : null;
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->k_pay_address = isset($data['k_pay_address']) ? (string)$data['k_pay_address'] : null;
        $this->k_pay_bank = isset($data['k_pay_bank']) ? (string)$data['k_pay_bank'] : null;
        $this->k_pay_recurrent = isset($data['k_pay_recurrent']) ? (string)$data['k_pay_recurrent'] : null;
        $this->k_region = isset($data['k_region']) ? (string)$data['k_region'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_number = isset($data['s_number']) ? (string)$data['s_number'] : null;
        $this->sid_card_system = isset($data['sid_card_system']) ? (string)$data['sid_card_system'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_country = isset($data['text_country']) ? (string)$data['text_country'] : null;
        $this->text_holder = isset($data['text_holder']) ? (string)$data['text_holder'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_public_token = isset($data['text_public_token']) ? (string)$data['text_public_token'] : null;
        $this->text_region = isset($data['text_region']) ? (string)$data['text_region'] : null;
        $this->text_street_1 = isset($data['text_street_1']) ? (string)$data['text_street_1'] : null;
        $this->text_street_2 = isset($data['text_street_2']) ? (string)$data['text_street_2'] : null;
    }
}
