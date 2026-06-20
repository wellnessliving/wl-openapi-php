<?php

namespace WlSdk\Wl\Reward\Board;

class ElementGetRequest
{
    /**
     * List of users to get information for.
     *
     * `null` for mode of single user.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Reward board to show information for.
     *
     * @var string|null
     */
    public ?string $k_reward_board = null;

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
            'a_uid' => $this->a_uid,
            'k_business' => $this->k_business,
            'k_reward_board' => $this->k_reward_board,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
