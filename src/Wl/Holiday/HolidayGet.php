<?php
namespace WlSdk\Wl\Holiday;

use WlSdk\WlSdkClient;

/**
 * Returns information about holiday day of business/locations.
 */
class HolidayGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about holiday day of business/locations.
     *
     * For the specified business and date, returns whether that date is a business-wide closed day, the closed day
     * title if applicable, and a map of location keys to their closed day titles for any locations also closed on
     * that date.
     *
     * @return HolidayGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(HolidayGetRequest $request): HolidayGetResponse
    {
        return new HolidayGetResponse($this->client->request('/Wl/Holiday/Holiday.json', $request->params(), 'GET'));
    }
}
