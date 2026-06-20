<?php
namespace WlSdk\Wl\Classes\ClassView;

class ElementGetResponseClassListConfig
{
    /**
     * List of allowed relation types specific to a given business.
     *  Key is ID. One of [RsFamilyRelationSid](#/components/schemas/RsFamilyRelationSid) constant.
     *  Value is SID.
     *
     * @var string[]|null
     */
    public ?array $a_family_relation = null;

    /**
     * List of allowed relation types specific to a given business.
     *  Each value constant from [RsFamilyRelationSid](#/components/schemas/RsFamilyRelationSid) class.
     *
     * @var int[]|null
     */
    public ?array $a_family_relation_login_allow = null;

    public function __construct(array $data)
    {
        $this->a_family_relation = isset($data['a_family_relation']) ? (array)$data['a_family_relation'] : null;
        $this->a_family_relation_login_allow = isset($data['a_family_relation_login_allow']) ? (array)$data['a_family_relation_login_allow'] : null;
    }
}
