<?php

namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Returns confirmation message that should be shown during the edit process of the location status.
 */
class LocationActiveEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns confirmation message that should be shown during the edit process of the location status.
     *
     * @return LocationActiveEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LocationActiveEditGetRequest $request): LocationActiveEditGetResponse
    {
        return new LocationActiveEditGetResponse($this->client->request('/Wl/Location/LocationActiveEdit.json', $request->params(), 'GET'));
    }

    /**
     * Edits location active status.
     *
     * @return LocationActiveEditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationActiveEditPostRequest $request): LocationActiveEditPostResponse
    {
        return new LocationActiveEditPostResponse($this->client->request('/Wl/Location/LocationActiveEdit.json', $request->params(), 'POST'));
    }

    /**
     * Deletes location active log.
     *
     * @return LocationActiveEditDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LocationActiveEditDeleteRequest $request): LocationActiveEditDeleteResponse
    {
        return new LocationActiveEditDeleteResponse($this->client->request('/Wl/Location/LocationActiveEdit.json', $request->params(), 'DELETE'));
    }
}
