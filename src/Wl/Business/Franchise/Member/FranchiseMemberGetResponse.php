<?php

namespace WlSdk\Wl\Business\Franchise\Member;

/**
 * Response from GET
 */
class FranchiseMemberGetResponse
{
    /**
     * List of relationships, which should be added with the client.
     *
     * @var FranchiseMemberGetResponseRelation[]|null
     */
    public ?array $a_relation = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? array_map(static fn ($item) => new FranchiseMemberGetResponseRelation((array)$item), (array)$data['a_relation']) : null;
    }
}
