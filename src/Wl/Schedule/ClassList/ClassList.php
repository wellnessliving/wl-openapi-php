<?php
namespace WlSdk\Wl\Schedule\ClassList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of classes and class information for the given business and date range.
 */
class ClassList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of classes and class information for the given business and date range.
     *
     * Returns upcoming class sessions for a business, with optional filtering by location,
     * day of week, time of day, staff member, and virtual or in-person mode. The result includes
     * per-session details such as staff, capacity, booking counts, and virtual locations, as well as
     * a calendar map indicating which dates have at least one scheduled session.
     *
     * @deprecated Use {@link Wl\Schedule\ClassList\ClassList68Api} instead.
     *
     * @return ClassListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ClassListGetRequest $request): ClassListGetResponse
    {
        return new ClassListGetResponse($this->client->request('/Wl/Schedule/ClassList/ClassList.json', $request->params(), 'GET'));
    }
}
