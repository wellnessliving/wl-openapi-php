<?php
namespace WlSdk\Wl\Reward\Action;

/**
 * Response from GET
 */
class ActionApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_reward_action = null;

    public function __construct(array $data)
    {
        $this->a_reward_action = isset($data['a_reward_action']) ? (array)$data['a_reward_action'] : null;
    }
}
