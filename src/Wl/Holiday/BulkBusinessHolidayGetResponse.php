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
     * @var array[]|null
     */
    public ?array $a_business_holidays = null;

    public function __construct(array $data)
    {
        $this->a_business_holidays = isset($data['a_business_holidays']) ? (array)$data['a_business_holidays'] : null;
    }
}
