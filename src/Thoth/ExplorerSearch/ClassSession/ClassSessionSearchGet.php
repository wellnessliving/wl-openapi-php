<?php
namespace WlSdk\Thoth\ExplorerSearch\ClassSession;

use WlSdk\WlSdkClient;

/**
 * Gets list of class sessions based on search criteria.
 */
class ClassSessionSearchGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of class sessions based on search criteria.
     *
     * Returns sessions matching the given geographic area, date range, and optional filters for business,
     * location, staff, experience type, home tour type, price, and location rating.
     * Only sessions within their current booking window are included in the result.
     *
     * @return ClassSessionSearchGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ClassSessionSearchGetRequest $request): ClassSessionSearchGetResponse
    {
        return new ClassSessionSearchGetResponse($this->client->request('/Thoth/ExplorerSearch/ClassSession/ClassSessionSearch.json', $request->params(), 'GET'));
    }
}
