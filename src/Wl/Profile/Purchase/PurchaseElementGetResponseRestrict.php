<?php
namespace WlSdk\Wl\Profile\Purchase;

class PurchaseElementGetResponseRestrict
{
    /**
     * The number of sessions that may be booked during this period.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The number of sessions that remain available.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * The name of the period type.
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
