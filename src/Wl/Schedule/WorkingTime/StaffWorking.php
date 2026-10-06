<?php

namespace WlSdk\Wl\Schedule\WorkingTime;

use WlSdk\WlSdkClient;

/**
 * Gets working hours for some staff.
 */
class StaffWorking
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets working hours for some staff.
     *
     * Returns the working and break periods, with time already occupied cut out, for the requested
     *  staff within the given date range at the given location. When no staff identifier is given,
     *  the periods are returned for all staff of the business. Exactly one of `k_staff` or
     *  `uid_staff` may be provided.
     *
     * @return StaffWorkingGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StaffWorkingGetRequest $request): StaffWorkingGetResponse
    {
        return new StaffWorkingGetResponse($this->client->request('/Wl/Schedule/WorkingTime/StaffWorking.json', $request->params(), 'GET'));
    }
}
