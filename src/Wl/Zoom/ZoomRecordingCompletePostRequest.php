<?php

namespace WlSdk\Wl\Zoom;

class ZoomRecordingCompletePostRequest
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

    /**
     * Token string that should be added to video download link like parameter `access_token` to be able to
     * download video without password validation.
     *
     * @var string|null
     */
    public ?string $s_download_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_event' => $this->id_event,
            'o_payload' => $this->o_payload,
            's_download_token' => $this->s_download_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
