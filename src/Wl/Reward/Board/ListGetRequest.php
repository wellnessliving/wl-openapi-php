<?php
namespace WlSdk\Wl\Reward\Board;

class ListGetRequest
{
    /**
     * ID of a business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of reward board to show information for.
     *
     * @var string|null
     */
    public ?string $k_reward_board = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_reward_board' => $this->k_reward_board,
            ],
            static fn($v) => $v !== null
        );
    }
}
