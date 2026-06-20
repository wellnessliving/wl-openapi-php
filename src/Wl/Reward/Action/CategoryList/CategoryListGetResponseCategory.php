<?php
namespace WlSdk\Wl\Reward\Action\CategoryList;

class CategoryListGetResponseCategory
{
    /**
     * ID of reward actions category type. One of {@link \WlSdk\RsRewardActionCategorySid} constants. `null` for
     * custom reward actions categories.
     *
     * @var int|null
     */
    public ?int $id_reward_action_category = null;

    /**
     * ID of reward actions category in database.
     *
     * @var string|null
     */
    public ?string $k_reward_action_category = null;

    /**
     * Title of the reward action.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->id_reward_action_category = isset($data['id_reward_action_category']) ? (int)$data['id_reward_action_category'] : null;
        $this->k_reward_action_category = isset($data['k_reward_action_category']) ? (string)$data['k_reward_action_category'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
