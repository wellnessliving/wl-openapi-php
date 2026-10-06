<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Filter;

use WlSdk\WlSdkClient;

/**
 * Gets list of schedule filters available for given user.
 */
class ScheduleListFilter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of schedule filters available for given user.
     *
     * Returns the user's own filters together with public filters saved for the business, skipping
     *  filters restricted to locations the user cannot access. Filter configurations are stored in
     *  "mirror" format (deselected elements); this method converts them into the actual list of
     *  selected classes, events, locations, assets, services, and staff members expected by the client.
     *
     * @return ScheduleListFilterGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListFilterGetRequest $request): ScheduleListFilterGetResponse
    {
        return new ScheduleListFilterGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/Filter/ScheduleListFilter.json', $request->params(), 'GET'));
    }
}
