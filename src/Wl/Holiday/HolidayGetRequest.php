<?php
namespace WlSdk\Wl\Holiday;

class HolidayGetRequest
{
    /**
     * The date working hours are required for.
     * Set in the business's timezone.
     *
     * @var string|null
     */
    public ?string $dl_work = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_work' => $this->dl_work,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
