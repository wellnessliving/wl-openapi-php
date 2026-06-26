<?php

namespace WlSdk\Core\Geo\City;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Geo/City/City.json
 */
class City
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls DELETE /Core/Geo/City/City.json.
     *
     * @return CityDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(CityDeleteRequest $request): CityDeleteResponse
    {
        return new CityDeleteResponse($this->client->request('/Core/Geo/City/City.json', $request->params(), 'DELETE'));
    }
}
