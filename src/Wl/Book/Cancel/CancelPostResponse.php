<?php

namespace WlSdk\Wl\Book\Cancel;

/**
 * Response from POST
 */
class CancelPostResponse
{
    /**
     * Array of visit's key which were canceled. These visits are in current location. Bookings made at other
     * locations
     * cannot be canceled, but they can be visible in clients Upcoming schedule in franchisee and can be selected
     * for
     * cancellation.
     *
     * Each key is primary key in RsVisitSql table.
     *
     * @var string[]|null
     */
    public ?array $a_visit_canceled = null;

    public function __construct(array $data)
    {
        $this->a_visit_canceled = isset($data['a_visit_canceled']) ? (array)$data['a_visit_canceled'] : null;
    }
}
