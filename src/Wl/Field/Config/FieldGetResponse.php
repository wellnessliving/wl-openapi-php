<?php

namespace WlSdk\Wl\Field\Config;

/**
 * Response from GET
 */
class FieldGetResponse
{
    /**
     * List of items for dropdown and select fields.
     *
     * @var array|null
     */
    public ?array $a_field_item = null;

    /**
     * Whether new field item can be added.
     *
     * @var bool|null
     */
    public ?bool $can_add_item = null;

    /**
     * Whether default value can be set for the field.
     *
     * @var bool|null
     */
    public ?bool $can_default = null;

    /**
     * `true` if field can be removed, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_remove = null;

    /**
     * `true` if field can be sorted, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_sort = null;

    /**
     * `true` if for field can change active state, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_state = null;

    /**
     * Size of the text input.
     *
     * Sets only when field has {@link \WlSdk\RsFieldTypeSid} type.
     *
     * @var int|null
     * @see \WlSdk\RsFieldTypeSid
     */
    public ?int $i_size = null;

    /**
     * Field type ID.
     *
     * @var int|null
     * @see \WlSdk\RsFieldTypeSid
     */
    public ?int $id_field_type = null;

    /**
     * `true` if field is active, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * `true` if a field is required during booking or purchase;
     * `false` if a field is not require during booking or purchase;
     *
     * @var bool|null
     */
    public ?bool $is_booking_and_purchase = null;

    /**
     * `true` if setting "Display during booking/purchase" is disabled, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_booking_and_purchase_disable = null;

    /**
     * `true` if display this field to franchisee, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_franchisee_display = null;

    /**
     * `true` if field is public, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_public = null;

    /**
     * `true` if setting "Visible to clients" is disabled, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_public_disable = null;

    /**
     * `true` if a field is required on sign up;
     * `false` if a field is not require on sign up;
     *
     * @var bool|null
     */
    public ?bool $is_registration = null;

    /**
     * `true` if setting "Display on sign-up" disabled, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_registration_disable = null;

    /**
     * `true` if field is required by client, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * `true` if setting "Required by clients" is disabled, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_require_disable = null;

    /**
     * `true` if field is required by staff, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_require_staff = null;

    /**
     * `true` if setting "Required by staff" is disabled, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_require_staff_disable = null;

    /**
     * Default value for field.
     *
     * @var string|null
     */
    public ?string $text_default = null;

    /**
     * Name of the field.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_field_item = isset($data['a_field_item']) ? (array)$data['a_field_item'] : null;
        $this->can_add_item = isset($data['can_add_item']) ? (bool)$data['can_add_item'] : null;
        $this->can_default = isset($data['can_default']) ? (bool)$data['can_default'] : null;
        $this->can_remove = isset($data['can_remove']) ? (bool)$data['can_remove'] : null;
        $this->can_sort = isset($data['can_sort']) ? (bool)$data['can_sort'] : null;
        $this->can_state = isset($data['can_state']) ? (bool)$data['can_state'] : null;
        $this->i_size = isset($data['i_size']) ? (int)$data['i_size'] : null;
        $this->id_field_type = isset($data['id_field_type']) ? (int)$data['id_field_type'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_booking_and_purchase = isset($data['is_booking_and_purchase']) ? (bool)$data['is_booking_and_purchase'] : null;
        $this->is_booking_and_purchase_disable = isset($data['is_booking_and_purchase_disable']) ? (bool)$data['is_booking_and_purchase_disable'] : null;
        $this->is_franchisee_display = isset($data['is_franchisee_display']) ? (bool)$data['is_franchisee_display'] : null;
        $this->is_public = isset($data['is_public']) ? (bool)$data['is_public'] : null;
        $this->is_public_disable = isset($data['is_public_disable']) ? (bool)$data['is_public_disable'] : null;
        $this->is_registration = isset($data['is_registration']) ? (bool)$data['is_registration'] : null;
        $this->is_registration_disable = isset($data['is_registration_disable']) ? (bool)$data['is_registration_disable'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->is_require_disable = isset($data['is_require_disable']) ? (bool)$data['is_require_disable'] : null;
        $this->is_require_staff = isset($data['is_require_staff']) ? (bool)$data['is_require_staff'] : null;
        $this->is_require_staff_disable = isset($data['is_require_staff_disable']) ? (bool)$data['is_require_staff_disable'] : null;
        $this->text_default = isset($data['text_default']) ? (string)$data['text_default'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
