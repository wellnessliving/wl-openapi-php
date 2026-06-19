<?php
namespace WlSdk\Wl\Location\View;

use WlSdk\WlSdkClient;

/**
 * Returns detailed information about the specified location.
 */
class ViewApi
{
    /**
     * Maximum location image height.
     *
     * @var int|null
     */
    public ?int $i_logo_height = null;

    /**
     * Maximum location image width.
     *
     * @var int|null
     */
    public ?int $i_logo_width = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

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
     * @return ViewApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ViewApiGetResponse
    {
        return new ViewApiGetResponse($this->client->request('/Wl/Location/View/View.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'i_logo_height' => $this->i_logo_height,
            'i_logo_width' => $this->i_logo_width,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
