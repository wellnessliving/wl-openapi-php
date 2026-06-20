<?php

namespace WlSdk\Wl\Reward\Action;

class ActionGetRequest
{
    /**
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of reward action category.
     *
     * @var string|null
     */
    public ?string $k_reward_action_category = null;

    /**
     * Key of a user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_reward_action_category' => $this->k_reward_action_category,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
