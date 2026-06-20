<?php

namespace WlSdk\Wl\Appointment\Book\Purchase;

class Purchase72GetResponseLoginPromotionLoginPromotionInfo
{
    /**
     * The count of visits that the Purchase Option allows the client to make.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The maximum number of minutes that current Purchase Option can be used for.
     *
     * @var int|null
     */
    public ?int $i_limit_duration = null;

    /**
     * The count of the remaining visits.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * The number of minutes left in this Purchase Option.
     *
     * @var int|null
     */
    public ?int $i_remain_duration = null;

    public function __construct(array $data)
    {
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_limit_duration = isset($data['i_limit_duration']) ? (int)$data['i_limit_duration'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->i_remain_duration = isset($data['i_remain_duration']) ? (int)$data['i_remain_duration'] : null;
    }
}
