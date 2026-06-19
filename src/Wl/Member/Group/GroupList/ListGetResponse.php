<?php
namespace WlSdk\Wl\Member\Group\GroupList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_member_group = null;

    public function __construct(array $data)
    {
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
    }
}
