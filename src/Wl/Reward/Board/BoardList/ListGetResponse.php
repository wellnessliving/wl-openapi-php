<?php

namespace WlSdk\Wl\Reward\Board\BoardList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * A list of reward boards. `null` if not loaded.
     * Each element:
     *
     * @var ListGetResponseRewardBoard[]|null
     */
    public ?array $a_reward_board = null;

    public function __construct(array $data)
    {
        $this->a_reward_board = isset($data['a_reward_board']) ? array_map(static fn ($item) => new ListGetResponseRewardBoard((array)$item), (array)$data['a_reward_board']) : null;
    }
}
