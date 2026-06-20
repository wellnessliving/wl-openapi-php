<?php
namespace WlSdk\Wl\Family\Relation;

/**
 * Response from DELETE
 */
class RelationDeleteResponse
{
    /**
     * No description.
     *
     * @var RelationDeleteResponseRelation[]|null
     */
    public ?array $a_relation = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? array_map(static fn($item) => new RelationDeleteResponseRelation((array)$item), (array)$data['a_relation']) : null;
    }
}
