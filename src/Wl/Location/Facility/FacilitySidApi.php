<?php
namespace WlSdk\Wl\Location\Facility;

use WlSdk\WlSdkClient;

/**
 * Returns the list of all items for the given Sid class.
 */
class FacilitySidApi
{
    /**
     * Name of the Sid class to get list from.
     * 
     * Should be a fully qualified class name.
     *
     * @var string|null
     */
    public ?string $s_class_name = null;

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
     * @return FacilitySidApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): FacilitySidApiGetResponse
    {
        return new FacilitySidApiGetResponse($this->client->request('/Wl/Location/Facility/FacilitySid.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            's_class_name' => $this->s_class_name,
            ],
            static fn($v) => $v !== null
        );
    }
}
