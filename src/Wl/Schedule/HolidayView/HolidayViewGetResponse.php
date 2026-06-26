<?php

namespace WlSdk\Wl\Schedule\HolidayView;

/**
 * Response from GET
 */
class HolidayViewGetResponse
{
    /**
     * Holiday data. See `_getHolidayInfo()` method.
     *
     * @var array|null
     */
    public ?array $a_holiday_info = null;

    /**
     * List of data for requested holidays. See `_getHolidayInfo()` method.
     *
     * @var array[]|null
     */
    public ?array $a_holiday_result = null;

    public function __construct(array $data)
    {
        $this->a_holiday_info = isset($data['a_holiday_info']) ? (array)$data['a_holiday_info'] : null;
        $this->a_holiday_result = isset($data['a_holiday_result']) ? (array)$data['a_holiday_result'] : null;
    }
}
