<?php

namespace WlSdk\Wl\Visit\Pay;

class PayChangeGetRequest
{
    /**
     * Defines whether 'pay now' option should be present.
     *
     * @var bool|null
     */
    public ?bool $is_pay_now = null;

    /**
     * Business key.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class period key.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Current user ID.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_pay_now' => $this->is_pay_now,
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
