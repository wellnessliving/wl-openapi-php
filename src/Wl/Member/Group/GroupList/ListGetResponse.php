<?php
namespace WlSdk\Wl\Member\Group\GroupList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * Member groups list:
     *
     * @var ListGetResponseMemberGroup[]|null
     */
    public ?array $a_member_group = null;

    public function __construct(array $data)
    {
        $this->a_member_group = isset($data['a_member_group']) ? array_map(static fn($item) => new ListGetResponseMemberGroup((array)$item), (array)$data['a_member_group']) : null;
    }
}
