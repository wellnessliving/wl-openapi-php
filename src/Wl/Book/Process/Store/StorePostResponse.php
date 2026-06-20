<?php
namespace WlSdk\Wl\Book\Process\Store;

/**
 * Response from POST
 */
class StorePostResponse
{
    /**
     * The keys for the user's activities. This will be populated upon completion of the booking process.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity = null;

    /**
     * The keys of the bookings that have been made.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * If `true`, the next steps of the booking wizard are required to purchase an item or book the selected
     * session.
     * 
     * If `false`, no further steps in the booking wizard are required.
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
