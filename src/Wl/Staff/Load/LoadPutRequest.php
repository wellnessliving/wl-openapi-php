<?php

namespace WlSdk\Wl\Staff\Load;

class LoadPutRequest
{
    /**
     * Business in which information about the staff load will be requested.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Staff member primary key.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * Location primary key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Pay rate identifier.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_staff' => $this->k_staff,
            'uid_staff' => $this->uid_staff,
            'k_location' => $this->k_location,
            'k_staff_pay' => $this->k_staff_pay,
            ],
            static fn ($v) => $v !== null
        );
    }
}
