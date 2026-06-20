<?php
namespace WlSdk\Wl\Holiday;

/**
 * Response from GET
 */
class BulkBusinessHolidayGetResponse
{
    /**
     * No description.
     *
     * @var BulkBusinessHolidayGetResponseBusinessHolidays[]|null
     */
    public ?array $a_business_holidays = null;

    public function __construct(array $data)
    {
        $this->a_business_holidays = isset($data['a_business_holidays']) ? array_map(static fn($item) => new BulkBusinessHolidayGetResponseBusinessHolidays((array)$item), (array)$data['a_business_holidays']) : null;
    }
}
