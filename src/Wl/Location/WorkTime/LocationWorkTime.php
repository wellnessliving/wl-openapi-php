<?php
namespace WlSdk\Wl\Location\WorkTime;

use WlSdk\WlSdkClient;

/**
 * Saves working hours of the location.
 */
class LocationWorkTime
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves working hours of the location.
     *
     * Accepts a list of day-and-time-range entries representing the weekly schedule and replaces all existing
     * working hours for the location. Days not present in the list are treated as non-working days.
     *
     * @return LocationWorkTimePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationWorkTimePostRequest $request): LocationWorkTimePostResponse
    {
        return new LocationWorkTimePostResponse($this->client->request('/Wl/Location/WorkTime/LocationWorkTime.json', $request->params(), 'POST'));
    }
}
