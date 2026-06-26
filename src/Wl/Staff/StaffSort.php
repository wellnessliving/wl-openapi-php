<?php

namespace WlSdk\Wl\Staff;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Staff/StaffSort.json
 */
class StaffSort
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Staff/StaffSort.json.
     *
     * @return StaffSortPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StaffSortPostRequest $request): StaffSortPostResponse
    {
        return new StaffSortPostResponse($this->client->request('/Wl/Staff/StaffSort.json', $request->params(), 'POST'));
    }
}
