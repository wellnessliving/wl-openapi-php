<?php

namespace WlSdk\Wl\Family\Relation;

/**
 * Response from DELETE
 */
class Relation72DeleteResponse
{
    /**
     * Information about the user's relationships. Every element has the following fields:
     *
     * @var Relation72DeleteResponseRelation[]|null
     */
    public ?array $a_relation = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? array_map(static fn ($item) => new Relation72DeleteResponseRelation((array)$item), (array)$data['a_relation']) : null;
    }
}
