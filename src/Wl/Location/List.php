<?php
namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of locations for the given business.
 */
class List
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of locations for the given business.
     *
     * Accepts a single business key, a JSON-encoded list of business keys, or an array of business keys, and
     * returns location details including coordinates, address, timezone, directories, and logo URLs. For
     * franchisor businesses, automatically expands to include all franchisee locations.
     *
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Wl/Location/List.json', $request->params(), 'GET'));
    }
}
