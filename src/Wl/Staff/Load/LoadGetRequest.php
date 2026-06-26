<?php

namespace WlSdk\Wl\Staff\Load;

class LoadGetRequest
{
    /**
     * Business in which information about the staff load will be requested.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Staff member primary key.
     * Primary key in RsStaffSql table.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * User key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_staff' => $this->k_staff,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
