<?php
namespace WlSdk\Wl\Login\Attendance\Add;

/**
 * Response from POST
 */
class AddApiPostResponse
{
    /**
     * The status of the visit.
     * One of the [VisitSid](#/components/schemas/Wl.Visit.VisitSid) constants.
     *
     * @var int|null
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
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
        $this->is_paid = isset($data['is_paid']) ? (bool)$data['is_paid'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->url_store = isset($data['url_store']) ? (string)$data['url_store'] : null;
    }
}
