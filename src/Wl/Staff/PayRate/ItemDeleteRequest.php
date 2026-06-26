<?php

namespace WlSdk\Wl\Staff\PayRate;

class ItemDeleteRequest
{
    /**
     * Key of business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of staff pay rate.
     * Empty if you need to add new pay rate.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_staff_pay' => $this->k_staff_pay,
            ],
            static fn ($v) => $v !== null
        );
    }
}
