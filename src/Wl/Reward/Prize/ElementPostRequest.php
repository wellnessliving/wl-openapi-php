<?php
namespace WlSdk\Wl\Reward\Prize;

class ElementPostRequest
{
    /**
     * Business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of redeemable prize.
     *
     * @var string|null
     */
    public ?string $k_reward_prize = null;

    /**
     * User to retrieve information about.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_reward_prize' => $this->k_reward_prize,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
