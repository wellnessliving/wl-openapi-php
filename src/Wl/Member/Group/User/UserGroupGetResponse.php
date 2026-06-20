<?php

namespace WlSdk\Wl\Member\Group\User;

/**
 * Response from GET
 */
class UserGroupGetResponse
{
    /**
     * All groups to which the specified user belongs.
     *
     * @var string[]|null
     */
    public ?array $a_group_info = null;

    /**
     * Whether the user is in the quick group or not.
     *
     * @var bool|null
     */
    public ?bool $is_quick_group = null;

    public function __construct(array $data)
    {
        $this->a_group_info = isset($data['a_group_info']) ? (array)$data['a_group_info'] : null;
        $this->is_quick_group = isset($data['is_quick_group']) ? (bool)$data['is_quick_group'] : null;
    }
}
