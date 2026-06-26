<?php

namespace WlSdk\Wl\GymPass\Webhook;

class BookingCheckinPostRequest
{
    /**
     * Event type.
     *
     * @var array|null
     */
    public ?array $id_event_type = null;

    /**
     * Event data.
     *
     * @var array|null
     */
    public ?array $o_event_data = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_event_type' => $this->id_event_type,
            'o_event_data' => $this->o_event_data,
            ],
            static fn ($v) => $v !== null
        );
    }
}
