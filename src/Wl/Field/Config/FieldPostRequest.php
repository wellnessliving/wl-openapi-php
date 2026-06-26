<?php

namespace WlSdk\Wl\Field\Config;

class FieldPostRequest
{
    /**
     * Field table ID.
     *
     * @var int|null
     * @see \WlSdk\RsFieldTableSid
     */
    public ?int $id_field_table = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Field key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * List of items for dropdown and select fields.
     *
     * @var array|null
     */
    public ?array $a_field_item = null;

    /**
     * List of value for item.
     *
     * @var array|null
     */
    public ?array $a_field_item_value = null;

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
     * `true` if a field is required on sign up;
     * `false` if a field is not require on sign up;
     *
     * @var bool|null
     */
    public ?bool $is_registration = null;

    /**
     * `true` if field is required by client, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * `true` if field is required by staff, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_require_staff = null;

    /**
     * Maximum value of field.
     *
     * @var string|null
     */
    public ?string $s_max_value = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'id_field_table' => $this->id_field_table,
            'k_business' => $this->k_business,
            'k_field' => $this->k_field,
            'a_field_item' => $this->a_field_item,
            'a_field_item_value' => $this->a_field_item_value,
            'i_size' => $this->i_size,
            'id_field_type' => $this->id_field_type,
            'is_active' => $this->is_active,
            'is_booking_and_purchase' => $this->is_booking_and_purchase,
            'is_franchisee_display' => $this->is_franchisee_display,
            'is_public' => $this->is_public,
            'is_registration' => $this->is_registration,
            'is_require' => $this->is_require,
            'is_require_staff' => $this->is_require_staff,
            's_max_value' => $this->s_max_value,
            'text_default' => $this->text_default,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
