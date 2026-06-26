<?php

namespace WlSdk\Wl\Staff\PayRate;

class ListGetRequest
{
    /**
     * Pay rate type. One of {@link \WlSdk\RsStaffPaySid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsStaffPaySid
     */
    public ?int $id_staff_pay = null;

    /**
     * ID of business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key to get list of pay rates for special location. Primary key in RsLocationSql.
     *
     * Empty value if list of pay rates for all locations should be returned.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * TODO wl-80218: Remove this field after third parties do not use it.
     * Staff key. Primary key in RsStaffSql.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Staff user ID. Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_staff_pay' => $this->id_staff_pay,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_staff' => $this->k_staff,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
