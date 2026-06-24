<?php

namespace WlSdk\Wl\Schedule\ClassList;

/**
 * Response from GET
 */
class ClassListGetResponse
{
    /**
     * Keys are dates of the days inside requested date range, when there is at least one class in the business.
     * If locations are sent as a parameter, then at least one class must exist in the given locations.
     *
     * Each key is a date string in `YYYY-MM-DD` format (local date in the business time zone).
     * Each value is an empty array reserved for future use.
     *
     * @var array[]|null
     */
    public ?array $a_calendar = null;

    /**
     * A list of classes sessions starting with the date `dt_date`
     * and in the 62 days ahead (or up to `dt_end`).
     * Every element has the following keys:
     *
     * @var ClassListGetResponseSession[]|null
     */
    public ?array $a_session = null;

    /**
     * If `true`, the list of sessions contains sessions from different time zones. Otherwise, this will be
     * `false`.
     *
     * @var bool|null
     */
    public ?bool $is_timezone_different = null;

    /**
     * If `true`, there exists at least one virtual service by a specified
     * `k_business` and `k_class_tab`,
     * Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_virtual_service = null;

    public function __construct(array $data)
    {
        $this->a_calendar = isset($data['a_calendar']) ? (array)$data['a_calendar'] : null;
        $this->a_session = isset($data['a_session']) ? array_map(static fn ($item) => new ClassListGetResponseSession((array)$item), (array)$data['a_session']) : null;
        $this->is_timezone_different = isset($data['is_timezone_different']) ? (bool)$data['is_timezone_different'] : null;
        $this->is_virtual_service = isset($data['is_virtual_service']) ? (bool)$data['is_virtual_service'] : null;
    }
}
