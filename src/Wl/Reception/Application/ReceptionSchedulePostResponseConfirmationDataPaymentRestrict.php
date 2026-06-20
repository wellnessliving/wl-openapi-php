<?php

namespace WlSdk\Wl\Reception\Application;

class ReceptionSchedulePostResponseConfirmationDataPaymentRestrict
{
    /**
     * The count of possible visits.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The count of remaining visits.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * The calendar period name.
     *
     * @var bool|null
     */
    public ?bool $s_date = null;

    public function __construct(array $data)
    {
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->s_date = isset($data['s_date']) ? (bool)$data['s_date'] : null;
    }
}
