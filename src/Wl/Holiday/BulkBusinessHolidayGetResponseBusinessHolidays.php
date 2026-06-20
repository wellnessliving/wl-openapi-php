<?php

namespace WlSdk\Wl\Holiday;

class BulkBusinessHolidayGetResponseBusinessHolidays
{
    /**
     * List of effected classes, keys are class keys.
     * Values always `true`.
     *
     * @var bool[]|null
     */
    public ?array $a_class = null;

    /**
     * List of effected classes, keys are class keys.
     * Values always `true`.
     * Used in schedule widget.
     *
     * @var bool[]|null
     */
    public ?array $a_class_only = null;

    /**
     * List of effected events, keys are class keys.
     * Values always `true`.
     * Used in schedule widget.
     *
     * @var bool[]|null
     */
    public ?array $a_event_only = null;

    /**
     * Date of the end of the holiday.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * Date of the start of the holiday.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * `1` if all classes are selected to cancel, `0` - otherwise.
     *
     * @var int|null
     */
    public ?int $is_class_all = null;

    /**
     * `1` if all events are selected to cancel, `0` - otherwise.
     *
     * @var int|null
     */
    public ?int $is_event_all = null;

    /**
     * `1` if all services are selected to cancel, `0` - otherwise.
     *
     * @var int|null
     */
    public ?int $is_service_all = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Holiday key.
     *
     * @var string|null
     */
    public ?string $k_holiday = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The market key.
     *
     * @var string|null
     */
    public ?string $k_market = null;

    /**
     * Name of the holiday.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? (array)$data['a_class'] : null;
        $this->a_class_only = isset($data['a_class_only']) ? (array)$data['a_class_only'] : null;
        $this->a_event_only = isset($data['a_event_only']) ? (array)$data['a_event_only'] : null;
        $this->dt_end = isset($data['dt_end']) ? (string)$data['dt_end'] : null;
        $this->dt_start = isset($data['dt_start']) ? (string)$data['dt_start'] : null;
        $this->is_class_all = isset($data['is_class_all']) ? (int)$data['is_class_all'] : null;
        $this->is_event_all = isset($data['is_event_all']) ? (int)$data['is_event_all'] : null;
        $this->is_service_all = isset($data['is_service_all']) ? (int)$data['is_service_all'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_holiday = isset($data['k_holiday']) ? (string)$data['k_holiday'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_market = isset($data['k_market']) ? (string)$data['k_market'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
