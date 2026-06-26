<?php

namespace WlSdk\Wl\Location\TimeZone;

class TimeZonePostRequest
{
    /**
     * Location's address.
     *
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_location' => $this->text_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
