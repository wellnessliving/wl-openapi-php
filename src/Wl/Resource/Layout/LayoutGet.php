<?php
namespace WlSdk\Wl\Resource\Layout;

use WlSdk\WlSdkClient;

/**
 * Returns information about the specified asset layout, including assets and custom shapes.
 */
class LayoutGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about the specified asset layout, including assets and custom shapes.
     *
     * Returns the full layout configuration including the asset list with positions and images, custom shapes with
     * coordinates and colors, and display settings such as grid dimensions and number visibility.
     *
     * @return LayoutGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LayoutGetRequest $request): LayoutGetResponse
    {
        return new LayoutGetResponse($this->client->request('/Wl/Resource/Layout/Layout.json', $request->params(), 'GET'));
    }
}
