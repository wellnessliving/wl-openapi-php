<?php

namespace WlSdk\Wl\Reception\Roster;

/**
 * Response from POST
 */
class AttendanceListBookPostResponse
{
    /**
     * `true` if the client is on the waitlist for the class, `false` if they are on the class list.
     *
     * @var bool|null
     */
    public ?bool $is_wait = null;

    /**
     * The status message displayed on a successful booking.
     * Describes whether client was put in class list or waitlist.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->is_wait = isset($data['is_wait']) ? (bool)$data['is_wait'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
