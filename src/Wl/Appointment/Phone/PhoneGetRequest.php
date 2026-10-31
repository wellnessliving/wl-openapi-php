<?php

namespace WlSdk\Wl\Appointment\Phone;

class PhoneGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * Empty in a GET request means the default number for a future booking.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Key of the client of a future booking. Used only when `k_visit` is empty.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
