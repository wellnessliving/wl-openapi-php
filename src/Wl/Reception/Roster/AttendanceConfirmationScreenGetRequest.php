<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceConfirmationScreenGetRequest
{
    /**
     * Date and time of the visit.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Key of the business. Primary key in RsBusinessSql table
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class schedule key. Primary key for RsClassPeriodSql.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Secret string.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * User key. Primary key from the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_date' => $this->dtu_date,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_secret' => $this->s_secret,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
