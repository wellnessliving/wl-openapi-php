<?php
namespace WlSdk\Wl\Family\Relation;

/**
 * Response from GET
 */
class RelationGetResponse
{
    /**
     * Information about the user's relationships. Every element has the following fields:
     *
     * @var RelationGetResponseRelation[]|null
     */
    public ?array $a_relation = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? array_map(static fn($item) => new RelationGetResponseRelation((array)$item), (array)$data['a_relation']) : null;
    }
}
