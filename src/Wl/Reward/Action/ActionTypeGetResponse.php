<?php
namespace WlSdk\Wl\Reward\Action;

/**
 * Response from GET
 */
class ActionTypeGetResponse
{
    /**
     * Information about reward actions. Every element has next keys:
     *
     * @var ActionTypeGetResponseRewardAction[]|null
     */
    public ?array $a_reward_action = null;

    public function __construct(array $data)
    {
        $this->a_reward_action = isset($data['a_reward_action']) ? array_map(static fn($item) => new ActionTypeGetResponseRewardAction((array)$item), (array)$data['a_reward_action']) : null;
    }
}
