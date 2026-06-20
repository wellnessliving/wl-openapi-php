<?php

namespace WlSdk\Wl\Business\Reward\Config;

class RewardConfigPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * `true` Reward program is disabled, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_disabled_reward_program = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'is_disabled_reward_program' => $this->is_disabled_reward_program,
            ],
            static fn ($v) => $v !== null
        );
    }
}
