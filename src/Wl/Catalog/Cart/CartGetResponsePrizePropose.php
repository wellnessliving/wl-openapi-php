<?php

namespace WlSdk\Wl\Catalog\Cart;

class CartGetResponsePrizePropose
{
    /**
     * Amount of points needed to redeem the prize.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Reward prize key.
     *
     * @var string|null
     */
    public ?string $k_reward_prize = null;

    /**
     * Reward prize discount, e.g. '$10.00 off', '10% off'.
     *
     * @var string|null
     */
    public ?string $text_discount = null;

    /**
     * Reward prize title, e.g. 'on any item', 'on Water bottle', 'on any Appointment Pass or Membership Purchase
     * Option'.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->k_reward_prize = isset($data['k_reward_prize']) ? (string)$data['k_reward_prize'] : null;
        $this->text_discount = isset($data['text_discount']) ? (string)$data['text_discount'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
