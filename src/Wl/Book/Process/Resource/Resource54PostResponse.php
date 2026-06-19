<?php
namespace WlSdk\Wl\Book\Process\Resource;

/**
 * Response from POST
 */
class Resource54PostResponse
{
    /**
     * The keys of a user's activity.
     * This won't be empty only if the session(s) was booked at this step.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity = null;

    /**
     * The keys of the bookings that have been made.
     * Not empty only if session(s) was booked on this step.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * `true` - the next steps of the booking wizard are required (for example, to purchase something to book the
     * selected session).
     * `false` - no further booking steps are required.
     *
     * @var bool|null
     */
    public ?bool $is_next = null;

    public function __construct(array $data)
    {
        $this->a_login_activity = isset($data['a_login_activity']) ? (array)$data['a_login_activity'] : null;
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
        $this->is_next = isset($data['is_next']) ? (bool)$data['is_next'] : null;
    }
}
