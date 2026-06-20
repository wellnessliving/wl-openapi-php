<?php
namespace WlSdk\Wl\Reward\Action;

class ActionGetResponseRewardAction
{
    /**
     * ID of reward actions category type. One of
     * [RsRewardActionCategorySid](#/components/schemas/RsRewardActionCategorySid) constants. `false` for custom
     * reward actions categories.
     *
     * @var int|null
     */
    public ?int $id_reward_action_category = null;

    /**
     * ID of reward action.
     *
     * @var string|null
     */
    public ?string $k_reward_action = null;

    /**
     * ID of reward action category in database.
     *
     * @var string|null
     */
    public ?string $k_reward_action_category = null;

    public function __construct(array $data)
    {
        $this->id_reward_action_category = isset($data['id_reward_action_category']) ? (int)$data['id_reward_action_category'] : null;
        $this->k_reward_action = isset($data['k_reward_action']) ? (string)$data['k_reward_action'] : null;
        $this->k_reward_action_category = isset($data['k_reward_action_category']) ? (string)$data['k_reward_action_category'] : null;
    }
}
