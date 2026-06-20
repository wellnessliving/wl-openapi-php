<?php

namespace WlSdk\Wl\Appointment\Book\Purchase;

class PurchaseGetResponseRewardPrize
{
    /**
     * Prize price in points.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Key of redeemable prize.
     *
     * @var string|null
     */
    public ?string $k_reward_prize = null;

    /**
     * User friendly prize description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    public function __construct(array $data)
    {
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->k_reward_prize = isset($data['k_reward_prize']) ? (string)$data['k_reward_prize'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
    }
}
