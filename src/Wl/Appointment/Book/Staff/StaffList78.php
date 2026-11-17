<?php

namespace WlSdk\Wl\Appointment\Book\Staff;

use WlSdk\WlSdkClient;

/**
 * Retrieves an information about staff members for the current service.
 */
class StaffList78
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves an information about staff members for the current service.
     *
     * Returns the list of staff members who can perform the specified service at the given location
     *  on the specified date and time. Each entry includes the staff member's name, image, gender,
     *  and availability. An 'any staff' option is included when the service allows random staff assignment.
     *
     * When {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} is `true` and {@link
     * \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} is passed, the list holds the staff
     *  members who can perform the service at the location, whatever {@link
     * \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} says, and no
     *  staff member is left out for being unavailable. Each entry then gets `dt_next`, the next time when the
     * staff
     *  member can be booked, found with the add-ons of {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint}. That
     * search ignores
     *  {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} and {@link
     * \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint}.
     *
     * @return StaffList78GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StaffList78GetRequest $request): StaffList78GetResponse
    {
        return new StaffList78GetResponse($this->client->request('/Wl/Appointment/Book/Staff/StaffList78.json', $request->params(), 'GET'));
    }
}
