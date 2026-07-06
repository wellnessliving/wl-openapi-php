<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultiplePostRequest
{
    /**
     * Visits payment data.
     *
     * Visits payment data to apply:
     *
     * @var array[]|null
     */
    public ?array $a_visit_pay = null;

    /**
     * Determines for which store page the redirection url should be generated.
     * `true` if to the checkout page.
     * `false` if to the cart page.
     *
     * @var bool|null
     */
    public ?bool $is_checkout = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_visit_pay' => $this->a_visit_pay,
            'is_checkout' => $this->is_checkout,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
