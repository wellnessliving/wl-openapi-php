<?php

namespace WlSdk\Wl\Member\Progress\Field\Edit;

class FieldPostRequest
{
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
     * Field measurement unit ID.
     *
     * One of the {@link \WlSdk\Wl\Member\Progress\Field\MeasurementSid} constants.
     *
     * @var int|null
     */
    public ?int $id_measurement_unit = null;

    /**
     * Field type ID.
     *
     * One of the {@link \WlSdk\Wl\Member\Progress\Field\TypeSid} constants.
     *
     * @var int|null
     */
    public ?int $id_type = null;

    /**
     * Whether field is active and should be displayed on page.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether this field is public. If this field is set to `false`, this field is not visible to clients.
     *
     * @var bool|null
     */
    public ?bool $is_public = null;

    /**
     * Whether field value is required for clients.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Whether field value is required for staffs.
     *
     * @var bool|null
     */
    public ?bool $is_require_staff = null;

    /**
     * Field title.
     * Only titles of the custom progress fields can be changed.
     *
     * `null` If default title should be used.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_field' => $this->k_field,
            'id_measurement_unit' => $this->id_measurement_unit,
            'id_type' => $this->id_type,
            'is_active' => $this->is_active,
            'is_public' => $this->is_public,
            'is_require' => $this->is_require,
            'is_require_staff' => $this->is_require_staff,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
