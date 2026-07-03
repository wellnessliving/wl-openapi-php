<?php

namespace WlSdk\Wl\Holiday;

/**
 * Response from GET
 */
class BulkBusinessHolidayGetResponse
{
    /**
     * An array consisting of the business's closed day data for all locations by holiday keys
     * [HolidayApi::$dl_work](/Wl/Holiday/Holiday.json).
     *
     * List of holidays.
     *
     * @var BulkBusinessHolidayGetResponseBusinessHolidays[]|null
     */
    public ?array $a_business_holidays = null;

    public function __construct(array $data)
    {
        $this->a_business_holidays = isset($data['a_business_holidays']) ? array_map(static fn ($item) => new BulkBusinessHolidayGetResponseBusinessHolidays((array)$item), (array)$data['a_business_holidays']) : null;
    }
}
