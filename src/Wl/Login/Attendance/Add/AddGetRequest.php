<?php

namespace WlSdk\Wl\Login\Attendance\Add;

class AddGetRequest
{
    /**
     * The start date and time of the class in GMT and MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date_global = null;

    /**
     * Key of the business in which the request must be processed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The client user key.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date_global' => $this->dt_date_global,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid_client' => $this->uid_client,
            ],
            static fn ($v) => $v !== null
        );
    }
}
