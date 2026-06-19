<?php
namespace WlSdk\Wl\Member\Progress\Field\Edit;

/**
 * Response from GET
 */
class FieldApiGetResponse
{
    /**
     * A list of field measurement. See
     * [MeasurementSid](#/components/schemas/Wl.Member.Progress.Field.MeasurementSid).
     *
     * @var int[]|null
     */
    public ?array $a_measurement = null;

    /**
     * A list of field type. See [TypeSid](#/components/schemas/Wl.Member.Progress.Field.TypeSid).
     *
     * @var int[]|null
     */
    public ?array $a_type = null;

    /**
     * Field ID. One of the [ProgressFieldSid](#/components/schemas/Wl.Member.Progress.Field.ProgressFieldSid)
     * constant.
     *
     * @var int|null
     */
    public ?int $id_field = null;

    /**
     * Field measurement unit ID.
     * 
     * One of the [MeasurementSid](#/components/schemas/Wl.Member.Progress.Field.MeasurementSid) constants.
     *
     * @var int|null
     */
    public ?int $id_measurement_unit = null;

    /**
     * Field type ID.
     * 
     * One of the [TypeSid](#/components/schemas/Wl.Member.Progress.Field.TypeSid) constants.
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

    public function __construct(array $data)
    {
        $this->a_measurement = isset($data['a_measurement']) ? (array)$data['a_measurement'] : null;
        $this->a_type = isset($data['a_type']) ? (array)$data['a_type'] : null;
        $this->id_field = isset($data['id_field']) ? (int)$data['id_field'] : null;
        $this->id_measurement_unit = isset($data['id_measurement_unit']) ? (int)$data['id_measurement_unit'] : null;
        $this->id_type = isset($data['id_type']) ? (int)$data['id_type'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_public = isset($data['is_public']) ? (bool)$data['is_public'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->is_require_staff = isset($data['is_require_staff']) ? (bool)$data['is_require_staff'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
