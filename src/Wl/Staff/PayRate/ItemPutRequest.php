<?php

namespace WlSdk\Wl\Staff\PayRate;

class ItemPutRequest
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

    /**
     * Whether the pay rate should be used as default commission rate for the staff.
     *
     * `null` in case when don't need change this field.
     *
     * @var bool|null
     */
    public ?bool $is_commission_default = null;

    /**
     * Whether the pay rate should be used as default for the staff.
     *
     * `null` in case when don't need change this field.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Whether the pay rate should be used as hourly default for the staff.
     *
     * `null` in case when don't need change this field.
     *
     * @var bool|null
     */
    public ?bool $is_hour_default = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_staff_pay' => $this->k_staff_pay,
            'is_commission_default' => $this->is_commission_default,
            'is_default' => $this->is_default,
            'is_hour_default' => $this->is_hour_default,
            ],
            static fn ($v) => $v !== null
        );
    }
}
