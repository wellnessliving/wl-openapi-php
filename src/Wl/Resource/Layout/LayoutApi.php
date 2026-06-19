<?php
namespace WlSdk\Wl\Resource\Layout;

use WlSdk\WlSdkClient;

/**
 * Returns information about the specified asset layout, including assets and custom shapes.
 */
class LayoutApi
{
    /**
     * The key of the layout.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

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
     * @return LayoutApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LayoutApiGetResponse
    {
        return new LayoutApiGetResponse($this->client->request('/Wl/Resource/Layout/Layout.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_resource_layout' => $this->k_resource_layout,
            ],
            static fn($v) => $v !== null
        );
    }
}
