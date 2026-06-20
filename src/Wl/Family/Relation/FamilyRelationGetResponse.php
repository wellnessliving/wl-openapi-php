<?php
namespace WlSdk\Wl\Family\Relation;

/**
 * Response from GET
 */
class FamilyRelationGetResponse
{
    /**
     * The relationship types in the business.
     * 
     * Key is ID, value is SID.
     *
     * @var \WlSdk\RsFamilyRelationSid[]|null
     */
    public ?array $a_business_relationships = null;

    public function __construct(array $data)
    {
        $this->a_business_relationships = isset($data['a_business_relationships']) ? array_map(static fn($v) => \WlSdk\RsFamilyRelationSid::tryFrom((int)$v), (array)$data['a_business_relationships']) : null;
    }
}
