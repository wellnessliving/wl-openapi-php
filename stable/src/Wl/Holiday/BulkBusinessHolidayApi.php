<?php
namespace WlSdk\Wl\Holiday;

use WlSdk\WlSdkClient;

/**
 * Returns all holiday records for all locations of the specified business.
 */
class BulkBusinessHolidayApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns all holiday records for all locations of the specified business.
     *
     * Retrieves the complete list of holidays across all date ranges for every location belonging to the given
     * business, including both business-level and location-level closed days.
     *
     * @return BulkBusinessHolidayApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BulkBusinessHolidayApiGetResponse
    {
        return new BulkBusinessHolidayApiGetResponse($this->client->request('/Wl/Holiday/BulkBusinessHoliday.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
