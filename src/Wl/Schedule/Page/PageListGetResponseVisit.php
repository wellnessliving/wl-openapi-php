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
     */
    public ?int $id_visit = null;

    public function __construct(array $data)
    {
        $this->dtu_date = isset($data['dtu_date']) ? (string)$data['dtu_date'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
    }
}
