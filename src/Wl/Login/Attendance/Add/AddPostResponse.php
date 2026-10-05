<?php

namespace WlSdk\Wl\Login\Attendance\Add;

/**
 * Response from POST
 */
class AddPostResponse
{
    /**
     * A list of sessions that are being booked asynchronously in the background.
     *
     * When a multi-session block event booking is processed, the first session is booked synchronously
     * and the remaining sessions are queued for background processing.
     *
     * `null` if there are no background sessions (single session booking or all sessions were booked
     * synchronously).
     *
     * Each element is an array with the following keys:
     *
     * @var AddPostResponseBookBackground[]|null
     */
    public ?array $a_book_background = null;

    /**
     * The status of the visit.
     * One of the {@link \WlSdk\Wl\Visit\VisitSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * If `true`, the visit was automatically paid for in any available way during the booking.
     * If `false`, the visit wasn't automatically paid for.
     *
     * @var bool|null
     */
    public ?bool $is_paid = null;

    /**
     * The key of the booked visit. This will be set on success.
     * This value will be needed if the session still needs to be paid for.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The URL link to the store to allow for the payment of the visit.
     *
     * This link is for web only.
     *
     * @var string|null
     */
    public ?string $url_store = null;

    public function __construct(array $data)
    {
        $this->a_book_background = isset($data['a_book_background']) ? array_map(static fn ($item) => new AddPostResponseBookBackground((array)$item), (array)$data['a_book_background']) : null;
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
        $this->is_paid = isset($data['is_paid']) ? (bool)$data['is_paid'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->url_store = isset($data['url_store']) ? (string)$data['url_store'] : null;
    }
}
