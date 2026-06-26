<?php

namespace WlSdk\Wl\Login\Permission\Access;

class AccessGetRequest
{
    /**
     * Schedule item information. Has structure:
     *
     * @var array|null
     */
    public ?array $a_schedule = null;

    /**
     * Time when class or service occurs:
     *
     * @var array|null
     */
    public ?array $a_time = null;

    /**
     * Date when class or service occurs.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.
     *
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_schedule' => $this->a_schedule,
            'a_time' => $this->a_time,
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
