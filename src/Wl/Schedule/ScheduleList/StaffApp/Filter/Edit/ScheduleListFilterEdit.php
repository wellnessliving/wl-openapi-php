<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Filter\Edit;

use WlSdk\WlSdkClient;

/**
 * Saves new configurations for schedule filter.
 */
class ScheduleListFilterEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves new configurations for schedule filter.
     *
     * @return ScheduleListFilterEditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ScheduleListFilterEditPostRequest $request): ScheduleListFilterEditPostResponse
    {
        return new ScheduleListFilterEditPostResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/Filter/Edit/ScheduleListFilterEdit.json', $request->params(), 'POST'));
    }

    /**
     * Deletes schedule filter.
     *
     * @return ScheduleListFilterEditDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ScheduleListFilterEditDeleteRequest $request): ScheduleListFilterEditDeleteResponse
    {
        return new ScheduleListFilterEditDeleteResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/Filter/Edit/ScheduleListFilterEdit.json', $request->params(), 'DELETE'));
    }
}
