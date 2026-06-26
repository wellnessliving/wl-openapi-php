<?php

namespace WlSdk\Wl\Zoom;

class ZoomRecordingPausePostRequest
{
    /**
     * Event type.
     *
     * @var int|null
     * @see \WlSdk\Wl\Zoom\ZoomApiEventSid
     */
    public ?int $id_event = null;

    /**
     * Recording payload information.
     *
     * @var array|null
     */
    public ?array $o_payload = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_event' => $this->id_event,
            'o_payload' => $this->o_payload,
            ],
            static fn ($v) => $v !== null
        );
    }
}
