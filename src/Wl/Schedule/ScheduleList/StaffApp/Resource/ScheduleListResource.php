<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Resource;

use WlSdk\WlSdkClient;

/**
 * Gets list of assets in business `k_business`.
 */
class ScheduleListResource
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of assets in business `k_business`.
     *
     * Returns active assets available at locations the current staff member can access, together with
     *  asset images and their configured work and break periods.
     *
     * @return ScheduleListResourceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListResourceGetRequest $request): ScheduleListResourceGetResponse
    {
        return new ScheduleListResourceGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/Resource/ScheduleListResource.json', $request->params(), 'GET'));
    }
}
