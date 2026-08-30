<?php

namespace WlSdk\Wl\Tag;

class TagGetResponseTagCoupon
{
    /**
     * The coupon key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Whether the tag is the primary revenue category for the coupon.
     *
     * @var bool|null
     */
    public ?bool $is_primary = null;

    public function __construct(array $data)
    {
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->is_primary = isset($data['is_primary']) ? (bool)$data['is_primary'] : null;
    }
}
