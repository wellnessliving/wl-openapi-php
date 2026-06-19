<?php
namespace WlSdk\Wl\Location\WorkTime;

use WlSdk\WlSdkClient;

/**
 * Saves working hours of the location.
 */
class LocationWorkTimeApi
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_work_time = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * Saves working hours of the location.
     *
     * Accepts a list of day-and-time-range entries representing the weekly schedule and replaces all existing
     * working hours for the location. Days not present in the list are treated as non-working days.
     *
     * @return LocationWorkTimeApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): LocationWorkTimeApiPostResponse
    {
        return new LocationWorkTimeApiPostResponse($this->client->request('/Wl/Location/WorkTime/LocationWorkTime.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_work_time' => $this->a_work_time,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
