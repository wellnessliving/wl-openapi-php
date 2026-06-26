<?php

namespace WlSdk\Wl\Integration\Zoom;

class ConnectionPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Event payload information.
     *
     * @var array|null
     */
    public ?array $a_payload = null;

    /**
     * Event type.
     *
     * @var string|null
     */
    public ?string $s_event = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_payload' => $this->a_payload,
            's_event' => $this->s_event,
            ],
            static fn ($v) => $v !== null
        );
    }
}
