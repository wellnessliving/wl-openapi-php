<?php

namespace WlSdk\Wl\Holiday;

use WlSdk\WlSdkClient;

/**
 * Returns all holiday records for all locations of the specified business.
 */
class BulkBusinessHoliday
{
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
     * @return BulkBusinessHolidayGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BulkBusinessHolidayGetRequest $request): BulkBusinessHolidayGetResponse
    {
        return new BulkBusinessHolidayGetResponse($this->client->request('/Wl/Holiday/BulkBusinessHoliday.json', $request->params(), 'GET'));
    }
}
