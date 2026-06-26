<?php

namespace WlSdk\Wl\ClassPass;

class ReservationDataPatchRequest
{
    /**
     * Reservation ID.
     *
     * @var string|null
     */
    public ?string $s_reservation = null;

    public function params(): array
    {
        return array_filter(
            [
            's_reservation' => $this->s_reservation,
            ],
            static fn ($v) => $v !== null
        );
    }
}
