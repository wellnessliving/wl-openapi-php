<?php
namespace WlSdk\Wl\Location\WorkTime;

class LocationWorkTimePostRequest
{
    /**
     * The list of the location's business hours. Each element has the next structure:
     * 
     * Note that the days of the week that aren't represented in this list will be saved as non-working days.
     *
     * @var array[]|null
     */
    public ?array $a_work_time = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_work_time' => $this->a_work_time,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
