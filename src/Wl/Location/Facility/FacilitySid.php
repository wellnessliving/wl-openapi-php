<?php
namespace WlSdk\Wl\Location\Facility;

use WlSdk\WlSdkClient;

/**
 * Returns the list of all items for the given Sid class.
 */
class FacilitySid
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of all items for the given Sid class.
     *
     * Populates enumeration dropdowns and lookup tables on the frontend.
     *
     * @return FacilitySidGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FacilitySidGetRequest $request): FacilitySidGetResponse
    {
        return new FacilitySidGetResponse($this->client->request('/Wl/Location/Facility/FacilitySid.json', $request->params(), 'GET'));
    }
}
