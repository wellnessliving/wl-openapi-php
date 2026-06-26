<?php

namespace WlSdk\Wl\Business\Franchise\Member;

class FranchiseMemberGetResponseRelation
{
    /**
     * Relationship from the current user to the relative from {@link \WlSdk\RsFamilyRelationSid}.
     *
     * @var int|null
     * @see \WlSdk\RsFamilyRelationSid
     */
    public ?int $id_family_relation = null;

    /**
     * Client's email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Client's full name.
     *
     * @var string|null
     */
    public ?string $text_name_full = null;

    /**
     * Client's phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Name of teh relationship from the relative to the current user.
     *
     * @var string|null
     */
    public ?string $text_relationship = null;

    /**
     * User ID of the relative from PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Link to the client's photo.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->id_family_relation = isset($data['id_family_relation']) ? (int)$data['id_family_relation'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name_full = isset($data['text_name_full']) ? (string)$data['text_name_full'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_relationship = isset($data['text_relationship']) ? (string)$data['text_relationship'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
