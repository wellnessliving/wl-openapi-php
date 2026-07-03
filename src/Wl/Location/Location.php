<?php

namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Creates new location or edits the existing location.
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
     * Creates new location or edits the existing location.
     *
     * When {@link \WlSdk\Wl\Location\Location} is omitted, creates a new location requiring {@link
     * \WlSdk\Wl\Location\Location},
     *  {@link \WlSdk\Wl\Location\Location}, and {@link \WlSdk\Wl\Location\Location}.
     * When {@link \WlSdk\Wl\Location\Location} is provided, updates only the supplied fields of the existing
     * location.
     *  Returns the key of the created or updated location.
     *
     * @return LocationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationPostRequest $request): LocationPostResponse
    {
        return new LocationPostResponse($this->client->request('/Wl/Location/Location.json', $request->params(), 'POST'));
    }
}
