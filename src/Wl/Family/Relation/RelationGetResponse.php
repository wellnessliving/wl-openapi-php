<?php
namespace WlSdk\Wl\Family\Relation;

/**
 * Response from GET
 */
class RelationGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_relation = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? (array)$data['a_relation'] : null;
    }
}
