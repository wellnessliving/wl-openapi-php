<?php

namespace WlSdk\Wl\Reward\Action;

/**
 * Response from GET
 */
class ActionGetResponse
{
    /**
     * A list reward actions. Every element has next keys:
     *
     * @var ActionGetResponseRewardAction[]|null
     */
    public ?array $a_reward_action = null;

    public function __construct(array $data)
    {
        $this->a_reward_action = isset($data['a_reward_action']) ? array_map(static fn ($item) => new ActionGetResponseRewardAction((array)$item), (array)$data['a_reward_action']) : null;
    }
}
