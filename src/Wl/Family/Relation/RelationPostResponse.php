<?php
namespace WlSdk\Wl\Family\Relation;

/**
 * Response from POST
 */
class RelationPostResponse
{
    /**
     * No description.
     *
     * @var RelationPostResponseRelation[]|null
     */
    public ?array $a_relation = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? array_map(static fn($item) => new RelationPostResponseRelation((array)$item), (array)$data['a_relation']) : null;
    }
}
