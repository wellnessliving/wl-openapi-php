<?php
namespace WlSdk\Wl\Book\Process\Quiz;

/**
 * Response from POST
 */
class QuizApiPostResponse
{
    /**
     * The user's activity keys.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity = null;

    /**
     * The keys the bookings that have been made.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * If `true`, the next steps of the booking wizard are required for the purchase or booking. Otherwise, this
     * will be `false`.
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
