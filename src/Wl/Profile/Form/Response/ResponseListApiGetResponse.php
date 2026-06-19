<?php
namespace WlSdk\Wl\Profile\Form\Response;

/**
 * Response from GET
 */
class ResponseListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_quiz_login = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_quiz_response = null;

    /**
     * Whether response can be amended by current user.
     *
     * @var bool|null
     */
    public ?bool $can_amend = null;

    /**
     * Whether response can be filled by current user.
     *
     * @var bool|null
     */
    public ?bool $can_fill = null;

    /**
     * Whether response can be removed by current user.
     *
     * @var bool|null
     */
    public ?bool $can_remove = null;

    /**
     * Whether response can be viewed by current user.
     *
     * @var bool|null
     */
    public ?bool $can_view = null;

    public function __construct(array $data)
    {
        $this->a_quiz_login = isset($data['a_quiz_login']) ? (array)$data['a_quiz_login'] : null;
        $this->a_quiz_response = isset($data['a_quiz_response']) ? (array)$data['a_quiz_response'] : null;
        $this->can_amend = isset($data['can_amend']) ? (bool)$data['can_amend'] : null;
        $this->can_fill = isset($data['can_fill']) ? (bool)$data['can_fill'] : null;
        $this->can_remove = isset($data['can_remove']) ? (bool)$data['can_remove'] : null;
        $this->can_view = isset($data['can_view']) ? (bool)$data['can_view'] : null;
    }
}
