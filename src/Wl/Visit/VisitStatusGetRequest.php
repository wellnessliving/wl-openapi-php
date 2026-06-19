<?php
namespace WlSdk\Wl\Visit;

class VisitStatusGetRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The time zone key.
     * 
     * `null` if not set then use default timezone client.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_timezone' => $this->k_timezone,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
