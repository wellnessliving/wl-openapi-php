<?php
namespace WlSdk\Wl\Coupon\CouponList;

class ListGetResponseCoupon
{
    /**
     * The type of coupon. One of {@link \WlSdk\Wl\Coupon\TypeSid} constants.
     *
     * @var \WlSdk\Wl\Coupon\TypeSid|null
     */
    public ?\WlSdk\Wl\Coupon\TypeSid $id_type = null;

    /**
     * The gift card key.
     *
     * @var string|null
     */
    public ?string $k_coupon = null;

    /**
     * The title of the gift card.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_type = isset($data['id_type']) ? \WlSdk\Wl\Coupon\TypeSid::tryFrom((int)$data['id_type']) : null;
        $this->k_coupon = isset($data['k_coupon']) ? (string)$data['k_coupon'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
