<?php
namespace WlSdk\Wl\Reception\Roster;

class AttendanceListBookPostRequest
{
    /**
     * The UTC datetime for the class in MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The business key.
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
     * The secret for authenticating the attendance kiosk.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * The client's user key.
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
            static fn($v) => $v !== null
        );
    }
}
