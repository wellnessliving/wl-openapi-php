<?php
namespace WlSdk\Wl\Location\View;

use WlSdk\WlSdkClient;

/**
 * Returns detailed information about the specified location.
 */
class ViewGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns detailed information about the specified location.
     *
     * Returns the full profile of a location, including address, coordinates, timezone, contact information,
     * business hours, logo, slide images, amenities, social media links, and a description.
     *
     * @return ViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ViewGetRequest $request): ViewGetResponse
    {
        return new ViewGetResponse($this->client->request('/Wl/Location/View/View.json', $request->params(), 'GET'));
    }
}
