<?php
namespace WlSdk\Wl\Profile\Activity;

/**
 * Response from GET
 */
class ElementGetResponse
{
    /**
     * Messages with description what did user do to get account credits as reward points.
     *
     * @var string[]|null
     */
    public ?array $a_credit_score = null;

    /**
     * Messages with description what did user do to get points.
     *
     * @var string[]|null
     */
    public ?array $a_reward_score = null;

    /**
     * Verifies that current user can view the specified profile.
     *
     * @var bool|null
     */
    public ?bool $can_profile = null;

    /**
     * The date of the activity in GMT.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * The date of the activity in the client's time zone.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * Description of the action, who and what did.
     *
     * @var string|null
     */
    public ?string $html_message = null;

    /**
     * Total amount of account credits user got for `k_login_activity`.
     *
     * @var int|null
     */
    public ?int $i_credit_score = null;

    /**
     * The total amount of rewards points the client received for the activity.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * The rewards points used to redeem a prize.
     *
     * @var int|null
     */
    public ?int $i_spend = null;

    /**
     * The ID of the icon that should be shown for this activity. One of {@link \WlSdk\Wl\Design\IconSid}
     * constants.
     * 
     * This will be `null` is no special icon for this activity.
     *
     * @var int|null
     */
    public ?int $id_icon = null;

    /**
     * The ID of the activity item returned by this endpoint. One of {@link \WlSdk\RsLoginActivityTypeSid}
     * constants.
     *
     * @var int|null
     */
    public ?int $id_type = null;

    /**
     * Object ID, for example, class period ID for books and visits.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The description of the activity. This should include the nature of the activity and the people involved.
     *
     * @var string|null
     */
    public ?string $s_message = null;

    /**
     * Link to share activity with social networks.
     *
     * @var string|null
     */
    public ?string $url_link = null;

    public function __construct(array $data)
    {
        $this->a_credit_score = isset($data['a_credit_score']) ? (array)$data['a_credit_score'] : null;
        $this->a_reward_score = isset($data['a_reward_score']) ? (array)$data['a_reward_score'] : null;
        $this->can_profile = isset($data['can_profile']) ? (bool)$data['can_profile'] : null;
        $this->dt_date_gmt = isset($data['dt_date_gmt']) ? (string)$data['dt_date_gmt'] : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->html_message = isset($data['html_message']) ? (string)$data['html_message'] : null;
        $this->i_credit_score = isset($data['i_credit_score']) ? (int)$data['i_credit_score'] : null;
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->i_spend = isset($data['i_spend']) ? (int)$data['i_spend'] : null;
        $this->id_icon = isset($data['id_icon']) ? (int)$data['id_icon'] : null;
        $this->id_type = isset($data['id_type']) ? (int)$data['id_type'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->s_message = isset($data['s_message']) ? (string)$data['s_message'] : null;
        $this->url_link = isset($data['url_link']) ? (string)$data['url_link'] : null;
    }
}
