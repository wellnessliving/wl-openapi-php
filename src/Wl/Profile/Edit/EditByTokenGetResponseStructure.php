<?php

namespace WlSdk\Wl\Profile\Edit;

class EditByTokenGetResponseStructure
{
    /**
     * The ID of a system field. One of the {@link \WlSdk\RsFieldGeneralSid} constants.
     * This value is only defined if `id_field_type`={@link \WlSdk\RsFieldTypeSid}.
     *
     * @var int|null
     * @see \WlSdk\RsFieldGeneralSid
     */
    public ?int $id_field_general = null;

    /**
     * Requirement for a case when a client books a service. One of FieldLevelEnum members.
     *
     * @var int|null
     */
    public ?int $id_level_booking = null;

    /**
     * Requirement for a case when a guest books or buys. One of FieldLevelEnum members.
     *
     * @var int|null
     */
    public ?int $id_level_guest = null;

    /**
     * Requirement for a case when a client makes a purchase. One of FieldLevelEnum members.
     *
     * @var int|null
     */
    public ?int $id_level_purchase = null;

    /**
     * Requirement for a case when a client adds a relationship. One of FieldLevelEnum members.
     *
     * @var int|null
     */
    public ?int $id_level_relationship = null;

    /**
     * Requirement for a case when a client signs up. One of FieldLevelEnum members.
     *
     * @var int|null
     */
    public ?int $id_level_signup = null;

    /**
     * Indicates whether the value of this field is required. This will be `1` if required or `0` if the field is
     * optional.
     *   **Deprecated. Use `id_level_booking`, `id_level_guest`, `id_level_purchase`, `id_level_relationship` or
     *       `id_level_signup` instead.**
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * The type of field. One of the {@link \WlSdk\RsFieldTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsFieldTypeSid
     */
    public ?int $id_field_type = null;

    /**
     * The field ID (`k_field`). A copy of the key of this array element.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * The title of the field.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The value of the field. This value is defined by individual fields.
     *
     * @var string|null
     */
    public ?string $x_value = null;

    public function __construct(array $data)
    {
        $this->id_field_general = isset($data['id_field_general']) ? (int)$data['id_field_general'] : null;
        $this->id_level_booking = isset($data['id_level_booking']) ? (int)$data['id_level_booking'] : null;
        $this->id_level_guest = isset($data['id_level_guest']) ? (int)$data['id_level_guest'] : null;
        $this->id_level_purchase = isset($data['id_level_purchase']) ? (int)$data['id_level_purchase'] : null;
        $this->id_level_relationship = isset($data['id_level_relationship']) ? (int)$data['id_level_relationship'] : null;
        $this->id_level_signup = isset($data['id_level_signup']) ? (int)$data['id_level_signup'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->id_field_type = isset($data['id_field_type']) ? (int)$data['id_field_type'] : null;
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->x_value = isset($data['x_value']) ? (string)$data['x_value'] : null;
    }
}
