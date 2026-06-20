<?php

namespace WlSdk\Wl\Family\Relation;

class RelationPostResponseRelation
{
    /**
     * The relationship type. One of the {@link \WlSdk\RsFamilyRelationSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsFamilyRelationSid
     */
    public ?int $id_family_relation = null;

    /**
     * The type of reciprocated relationship. One of the {@link \WlSdk\RsFamilyRelationSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsFamilyRelationSid
     */
    public ?int $id_family_relation_reverse = null;

    /**
     * The name of the relation.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * The first name of the relation.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * The key of the related user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->id_family_relation = isset($data['id_family_relation']) ? (int)$data['id_family_relation'] : null;
        $this->id_family_relation_reverse = isset($data['id_family_relation_reverse']) ? (int)$data['id_family_relation_reverse'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
