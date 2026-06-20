<?php

namespace WlSdk\Wl\Profile\Edit;

class EditByTokenGetResponseStructure
{
    /**
     * The ID of a system field. One of the {@link \WlSdk\RsFieldGeneralSid} constants.
     * This value is only defined if `id_field_type`={@link \WlSdk\RsFieldTypeSid}.
     *
     * @var int|null
     */
    public ?int $id_field_general = null;

    /**
     * Indicates whether the value of this field is required. This will be `1` if required or `0` if the field is
     * optional.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * The type of field. One of the {@link \WlSdk\RsFieldTypeSid} constants.
     *
     * @var int|null
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
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->id_field_type = isset($data['id_field_type']) ? (int)$data['id_field_type'] : null;
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->x_value = isset($data['x_value']) ? (string)$data['x_value'] : null;
    }
}
