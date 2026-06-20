<?php
namespace WlSdk\Wl\Member\Progress\Goal\Edit;

/**
 * Response from GET
 */
class GoalGetResponse
{
    /**
     * Field log data.
     *
     * @var GoalGetResponseFieldList[]|null
     */
    public ?array $a_field_list = null;

    /**
     * How we want to see this page. As a staff or as a user.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    public function __construct(array $data)
    {
        $this->a_field_list = isset($data['a_field_list']) ? array_map(static fn($item) => new GoalGetResponseFieldList((array)$item), (array)$data['a_field_list']) : null;
        $this->is_staff = isset($data['is_staff']) ? (bool)$data['is_staff'] : null;
    }
}
