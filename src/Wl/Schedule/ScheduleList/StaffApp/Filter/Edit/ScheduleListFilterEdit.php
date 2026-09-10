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
     * Validates the filter title and, for an existing filter, that the current user is allowed to
     *  change it. Compares the submitted class, event, location, resource, staff, and service type
     *  selections against the full lists available to the user in this business, builds the
     *  corresponding schedule config data, and saves it inside a transaction. Also updates the
     *  filter's default flag for the user and logs the change.
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
     * Validates that the given filter exists and that the current user is allowed to change it,
     *  either because the user created the filter or has staff-edit privilege for the business,
     *  then removes the filter inside a transaction.
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
