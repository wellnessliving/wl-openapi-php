<?php

namespace WlSdk\Wl\Login\Attendance\Row;

class RowGetRequest
{
    /**
     * Visit date and time in UTC, MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_date' => $this->dtu_date,
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn ($v) => $v !== null
        );
    }
}
