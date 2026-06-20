<?php

namespace WlSdk\Wl\Family\Relation;

/**
 * Response from POST
 */
class Relation72PostResponse
{
    /**
     * No description.
     *
     * @var Relation72PostResponseRelation[]|null
     */
    public ?array $a_relation = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? array_map(static fn ($item) => new Relation72PostResponseRelation((array)$item), (array)$data['a_relation']) : null;
    }
}
