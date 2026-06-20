<?php

namespace WlSdk\Wl\Business\Reward\Config;

/**
 * Response from GET
 */
class RewardConfigGetResponse
{
    /**
     * `true` Reward program is disabled, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_disabled_reward_program = null;

    public function __construct(array $data)
    {
        $this->is_disabled_reward_program = isset($data['is_disabled_reward_program']) ? (bool)$data['is_disabled_reward_program'] : null;
    }
}
