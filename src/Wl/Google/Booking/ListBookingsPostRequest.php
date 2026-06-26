<?php

namespace WlSdk\Wl\Google\Booking;

class ListBookingsPostRequest
{
    /**
     * ID of the user.
     *
     * @var string|null
     */
    public ?string $s_user_id = null;

    public function params(): array
    {
        return array_filter(
            [
            's_user_id' => $this->s_user_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
