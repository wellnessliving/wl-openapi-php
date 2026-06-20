<?php
namespace WlSdk\Wl\Reward\Board\BoardList;

class ListGetResponseRewardBoard
{
    /**
     * Reward board key.
     * `0` for the all-time system board.
     *
     * @var string|null
     */
    public ?string $k_reward_board = null;

    /**
     * Board title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->k_reward_board = isset($data['k_reward_board']) ? (string)$data['k_reward_board'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
