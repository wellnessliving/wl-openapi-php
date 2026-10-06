<?php

namespace WlSdk\Wl\Calendar\Cordova;

/**
 * Response from POST
 */
class CordovaCalendarStaffPostResponse
{
    /**
     * Events that must be synchronized in calendar. See `data()` for detailed description.
     *
     * @var CordovaCalendarStaffPostResponseVisitActual[]|null
     */
    public ?array $a_visit_actual = null;

    public function __construct(array $data)
    {
        $this->a_visit_actual = isset($data['a_visit_actual']) ? array_map(static fn ($item) => new CordovaCalendarStaffPostResponseVisitActual((array)$item), (array)$data['a_visit_actual']) : null;
    }
}
