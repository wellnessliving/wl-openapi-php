<?php
namespace WlSdk\Wl\Reward\Action;

/**
 * Response from GET
 */
class ElementApiGetResponse
{
    /**
     * Points amount that will be added to user account after successful accomplishment of reward action.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Reward score type ID.
     *
     * @var int|null
     */
    public ?int $id_reward_score = null;

    /**
     * `true` if user has requested points for action accomplishment, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_request = null;

    /**
     * User friendly reward action description.
     *
     * @var string|null
     */
    public ?string $s_description = null;

    public function __construct(array $data)
    {
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->id_reward_score = isset($data['id_reward_score']) ? (int)$data['id_reward_score'] : null;
        $this->is_request = isset($data['is_request']) ? (bool)$data['is_request'] : null;
        $this->s_description = isset($data['s_description']) ? (string)$data['s_description'] : null;
    }
}
