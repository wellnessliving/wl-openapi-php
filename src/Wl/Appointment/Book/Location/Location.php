<?php

namespace WlSdk\Wl\Appointment\Book\Location;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about locations on the appointment booking page.
 */
class Location
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of information about locations on the appointment booking page.
     *
     * Validates the business, class tab, and specified user, then loads the business locations
     *  that are available for booking. Locations where the user is blocked, or that expose no
     *  bookable service categories, are excluded. The result is written to
     *  {@link \WlSdk\Wl\Appointment\Book\Location\LocationGetResponse::$a_location}.
     *
     * @return LocationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LocationGetRequest $request): LocationGetResponse
    {
        return new LocationGetResponse($this->client->request('/Wl/Appointment/Book/Location/Location.json', $request->params(), 'GET'));
    }
}
