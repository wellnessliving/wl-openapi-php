<?php

namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Gets location lists for a bulk of businesses.
 */
class ListBulk
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets location lists for a bulk of businesses.
     *
     * Accepts a JSON-encoded list of business keys, a JSON-encoded list of location keys, or both, and returns
     * short-form location data alongside full location detail objects. Optionally filters results to only
     * locations that have a specific directory integration enabled.
     *
     * @return ListBulkGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListBulkGetRequest $request): ListBulkGetResponse
    {
        return new ListBulkGetResponse($this->client->request('/Wl/Location/ListBulk.json', $request->params(), 'GET'));
    }
}
