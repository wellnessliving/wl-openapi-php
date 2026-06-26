<?php

namespace WlSdk\Wl\Login\Coupon\Transfer;

/**
 * Response from GET
 */
class CouponTransferGetResponse
{
    /**
     * Information about relation between users:
     *
     * @var CouponTransferGetResponseRelation|null
     */
    public ?CouponTransferGetResponseRelation $a_relation = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? new CouponTransferGetResponseRelation((array)$data['a_relation']) : null;
    }
}
