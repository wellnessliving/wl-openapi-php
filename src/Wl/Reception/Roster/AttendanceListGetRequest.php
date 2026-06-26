<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceListGetRequest
{
    /**
     * Date and time of the currently viewed attendance list.
     *
     * `null` if not defined yet.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * Whether only clients from `Classpass` should be returned.
     *
     * `null` if not defined yet.
     *
     * @var bool|null
     */
    public ?bool $is_classpass_only = null;

    /**
     * Class period key of the attendance list. Primary key from RsClassPeriodSql table.
     *
     * `null` if not defined yet.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Secret key for access to attendance list.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtl_date' => $this->dtl_date,
            'is_classpass_only' => $this->is_classpass_only,
            'k_class_period' => $this->k_class_period,
            's_secret' => $this->s_secret,
            ],
            static fn ($v) => $v !== null
        );
    }
}
