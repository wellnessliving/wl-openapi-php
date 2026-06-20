<?php

namespace WlSdk\Wl\Staff\StaffList;

use WlSdk\WlSdkClient;

/**
 * Returns the list of staff members for the given business.
 */
class StaffList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of staff members for the given business.
     *
     * Returns all active (or optionally inactive) staff members for the business, including
     * their name, role, assigned services, contact details, and location assignments. Can be
     * filtered to only staff who have a specific privilege, and whether access-level checks
     * should be applied when building the result.
     *
     * @return StaffListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StaffListGetRequest $request): StaffListGetResponse
    {
        return new StaffListGetResponse($this->client->request('/Wl/Staff/StaffList/StaffList.json', $request->params(), 'GET'));
    }
}
