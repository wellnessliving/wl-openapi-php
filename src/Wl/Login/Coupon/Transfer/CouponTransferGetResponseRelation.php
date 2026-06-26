<?php

namespace WlSdk\Wl\Login\Coupon\Transfer;

class CouponTransferGetResponseRelation
{
    /**
     * Name of relation type.
     *
     * @var string|null
     */
    public ?string $html_relation = null;

    /**
     * User name with whom purchased event owner has relation.
     *
     * @var string|null
     */
    public ?string $html_user_name = null;

    public function __construct(array $data)
    {
        $this->html_relation = isset($data['html_relation']) ? (string)$data['html_relation'] : null;
        $this->html_user_name = isset($data['html_user_name']) ? (string)$data['html_user_name'] : null;
    }
}
