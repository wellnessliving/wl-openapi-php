<?php

namespace WlSdk\Wl\Staff\Load;

class Load74PutRequest
{
    /**
     * Business in which information about the staff load will be requested.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * Location primary key.
     * Primary key in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Pay rate identifier.
     * Primary key in RsStaffPaySql table.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_staff' => $this->uid_staff,
            'k_location' => $this->k_location,
            'k_staff_pay' => $this->k_staff_pay,
            ],
            static fn ($v) => $v !== null
        );
    }
}
