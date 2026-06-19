<?php
namespace WlSdk\Wl\Reward\Board\BoardList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_reward_board = null;

    public function __construct(array $data)
    {
        $this->a_reward_board = isset($data['a_reward_board']) ? (array)$data['a_reward_board'] : null;
    }
}
