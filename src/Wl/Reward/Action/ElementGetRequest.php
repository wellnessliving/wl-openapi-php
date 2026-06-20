<?php
namespace WlSdk\Wl\Reward\Action;

class ElementGetRequest
{
    /**
     * Business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Reward action to show information for.
     *
     * @var string|null
     */
    public ?string $k_reward_action = null;

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
            'k_reward_action' => $this->k_reward_action,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
