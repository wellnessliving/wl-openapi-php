<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceConfirmationScreenGetResponseVisitPaymentRestrict
{
    /**
     * Count of possible visits.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Count of remaining visits.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * Name of the calendar period.
     *
     * @var string|null
     */
    public ?string $s_date = null;

    public function __construct(array $data)
    {
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->s_date = isset($data['s_date']) ? (string)$data['s_date'] : null;
    }
}
