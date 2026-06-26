<?php

namespace WlSdk\Wl\Session;

use WlSdk\WlSdkClient;

/**
 * Saves into session location which was selected by guest when application was started.
 */
class Location
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves into session location which was selected by guest when application was started.
     *
     * @return LocationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationPostRequest $request): LocationPostResponse
    {
        return new LocationPostResponse($this->client->request('/Wl/Session/Location.json', $request->params(), 'POST'));
    }

    /**
     * Deletes selected by guest location from session.
     *
     * @return LocationDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LocationDeleteRequest $request): LocationDeleteResponse
    {
        return new LocationDeleteResponse($this->client->request('/Wl/Session/Location.json', $request->params(), 'DELETE'));
    }
}
