<?php

namespace WlSdk\Wl\Staff\PayRate;

class CopyPostRequest
{
    /**
     * List of pay rates to copy.
     *
     * @var array|null
     */
    public ?array $a_staff_pay = null;

    /**
     * Key of business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of staff user.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_staff_pay' => $this->a_staff_pay,
            'k_business' => $this->k_business,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
