<?php

namespace WlSdk\Wl\Zoom\Recover;

class ZoomRecoverPostRequest
{
    /**
     * Zoom meeting ID.
     *
     * @var string|null
     */
    public ?string $s_meeting_id = null;

    /**
     * ID of the recording.
     *
     * @var string|null
     */
    public ?string $s_recording_id = null;

    public function params(): array
    {
        return array_filter(
            [
            's_meeting_id' => $this->s_meeting_id,
            's_recording_id' => $this->s_recording_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
