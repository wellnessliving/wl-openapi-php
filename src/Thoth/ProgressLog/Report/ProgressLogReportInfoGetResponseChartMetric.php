<?php

namespace WlSdk\Thoth\ProgressLog\Report;

class ProgressLogReportInfoGetResponseChartMetric
{
    /**
     * Measurement unit short form list. See {@link \WlSdk\Wl\Member\Progress\Field\MeasurementSid}
     *  for more details.
     *
     * @var array|null
     */
    public ?array $a_measurement_unit = null;

    /**
     * Order of measurement units. Each value is one from {@link \WlSdk\Wl\Member\Progress\Field\MeasurementSid}
     * constants,
     *  each key is order position. This is needed to fix problem that order of JSON object keys is not preserved.
     *
     * @var array|null
     */
    public ?array $a_measurement_unit_order = null;

    /**
     * Field ID. One of the {@link \WlSdk\Wl\Member\Progress\Field\ProgressFieldSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Member\Progress\Field\ProgressFieldSid
     */
    public ?int $id_field = null;

    /**
     * Field measurement unit ID. One of the {@link \WlSdk\Wl\Member\Progress\Field\MeasurementSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Member\Progress\Field\MeasurementSid
     */
    public ?int $id_measurement_unit = null;

    /**
     * Field type ID. One of the {@link \WlSdk\Wl\Member\Progress\Field\TypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Member\Progress\Field\TypeSid
     */
    public ?int $id_type = null;

    /**
     * Whether field is active and should be displayed on page.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether measurement combines several measurement units and field needs several inputs.
     *
     * @var bool|null
     */
    public ?bool $is_combined = null;

    /**
     * Whether this field is public. If this field is set to 0, this field is not visible to clients.
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
     * Business Key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Field key. Primary key it the ProgressFieldSql table.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * Field name of this metric within {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}
     * report row.
     *
     * @var string|null
     */
    public ?string $s_column_name = null;

    /**
     * Progress field title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_measurement_unit = isset($data['a_measurement_unit']) ? (array)$data['a_measurement_unit'] : null;
        $this->a_measurement_unit_order = isset($data['a_measurement_unit_order']) ? (array)$data['a_measurement_unit_order'] : null;
        $this->id_field = isset($data['id_field']) ? (int)$data['id_field'] : null;
        $this->id_measurement_unit = isset($data['id_measurement_unit']) ? (int)$data['id_measurement_unit'] : null;
        $this->id_type = isset($data['id_type']) ? (int)$data['id_type'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_combined = isset($data['is_combined']) ? (bool)$data['is_combined'] : null;
        $this->is_public = isset($data['is_public']) ? (bool)$data['is_public'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->is_require_staff = isset($data['is_require_staff']) ? (bool)$data['is_require_staff'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
        $this->s_column_name = isset($data['s_column_name']) ? (string)$data['s_column_name'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
