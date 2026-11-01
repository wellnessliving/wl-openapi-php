<?php

namespace WlSdk\Wl\Schedule\Page;

class PageListGetResponseVisit
{
    /**
     * Date and time of the visit in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Key of the business in which this visit was made.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of a book/visit.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Visit status ID. One of {@link \WlSdk\Wl\Visit\VisitSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * `true` if the visit was booked as a Phone Call. This is the type of the service at the time of booking,
     * so it stays `true` after the service is switched to another type. `false` otherwise (in-person, virtual,
     * class visits).
     *
     * @var bool|null
     */
    public ?bool $is_phone_call = null;

    /**
     * Phone number the staff calls for a Phone Call visit, in the international E.164 format,
     * for example `+15550101001`.
     * `null` if the visit is not a Phone Call or has no number, or if the current user may not see the number.
     * The number is shown like the phone of the client: to the client, to the user who booked and to staff with
     * the privilege to see contact details of clients.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function __construct(array $data)
    {
        $this->dtu_date = isset($data['dtu_date']) ? (string)$data['dtu_date'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
        $this->is_phone_call = isset($data['is_phone_call']) ? (bool)$data['is_phone_call'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
    }
}
