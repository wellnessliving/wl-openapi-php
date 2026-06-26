<?php

namespace WlSdk\Wl\Catalog\Coupon\Payment;

class PaymentPostRequest
{
    /**
     * The list of coupon data.
     *
     * `null` if not set yet.
     *
     * @var array|null
     */
    public ?array $a_coupon = null;

    /**
     * A list of payment sources to pay with.
     *
     * Each element has next keys:
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * Key of source mode. One of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * Business key.
     *
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
     *
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Discount code value.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_coupon' => $this->a_coupon,
            'a_pay_form' => $this->a_pay_form,
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_discount_code' => $this->text_discount_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
