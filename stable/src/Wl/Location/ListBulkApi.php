<?php
namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Gets location lists for a bulk of businesses.
 */
class ListBulkApi
{
    /**
     * The ID of the directory if locations should be filtered by enabling directory integration.
     * 
     * `0` if a directory filter isn't required.
     *
     * @var int|null
     */
    public ?int $id_directory = null;

    /**
     * A list of businesses. Business primary keys are serialized with JSON.
     * 
     * Empty string if you need all locations in the system.
     *
     * @var string|null
     */
    public ?string $s_business = null;

    /**
     * A list of locations. Location primary keys are serialized with JSON.
     *
     * @var string|null
     */
    public ?string $s_location = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets location lists for a bulk of businesses.
     *
     * Accepts a JSON-encoded list of business keys, a JSON-encoded list of location keys, or both, and returns
     * short-form location data alongside full location detail objects. Optionally filters results to only
     * locations that have a specific directory integration enabled.
     *
     * @return ListBulkApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListBulkApiGetResponse
    {
        return new ListBulkApiGetResponse($this->client->request('/Wl/Location/ListBulk.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_directory' => $this->id_directory,
            's_business' => $this->s_business,
            's_location' => $this->s_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
