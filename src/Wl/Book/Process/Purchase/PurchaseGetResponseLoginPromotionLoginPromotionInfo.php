<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseGetResponseLoginPromotionLoginPromotionInfo
{
    /**
     * The number of visits the Purchase Option allows the client to make.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The maximum number of minutes the Purchase Option can be used for.
     *
     * @var int|null
     */
    public ?int $i_limit_duration = null;

    /**
     * The number of the remaining visits the Purchase Option has left.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * The number of minutes left in the Purchase Option.
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
