<?php
namespace WlSdk\Wl\Catalog\Cart;

class CartGetResponseRewardPropose
{
    /**
     * Login prize key.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * Reward prize discount, e.g. '$10.00 off', '10% off'.
     *
     * @var string|null
     */
    public ?string $text_discount = null;

    /**
     * Applied login prize discount title, e.g. '10% discount'.
     *
     * @var string|null
     */
    public ?string $text_discount_applied = null;

    /**
     * Purpose login prize discount title, e.g. 'Apply 10% off'.
     *
     * @var string|null
     */
    public ?string $text_discount_purpose = null;

    /**
     * Reward prize title, e.g. 'on any item', 'on Water bottle', 'on any Appointment Pass or Membership Purchase
     * Option'.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_login_prize = isset($data['k_login_prize']) ? (string)$data['k_login_prize'] : null;
        $this->text_discount = isset($data['text_discount']) ? (string)$data['text_discount'] : null;
        $this->text_discount_applied = isset($data['text_discount_applied']) ? (string)$data['text_discount_applied'] : null;
        $this->text_discount_purpose = isset($data['text_discount_purpose']) ? (string)$data['text_discount_purpose'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
