<?php

namespace WlSdk\Wl\Reception\Roster;

/**
 * Response from POST
 */
class AttendanceListAttendPostResponse
{
    /**
     * The visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The status message displayed on a successful check-in.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
