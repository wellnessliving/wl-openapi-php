<?php
namespace WlSdk\Wl\Reward\Action;

class ActionTypeGetRequest
{
    /**
     * ID of type of reward action. One of {@link \WlSdk\RsRewardScoreSid} constants.
     *
     * @var int|null
     */
    public ?int $id_reward_score = null;

    /**
     * Key of a business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_reward_score' => $this->id_reward_score,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
