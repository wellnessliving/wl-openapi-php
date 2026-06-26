<?php

namespace WlSdk\Wl\Schedule\HolidayView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about holiday.
 */
class HolidayView
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about holiday.
     *
     * @return HolidayViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(HolidayViewGetRequest $request): HolidayViewGetResponse
    {
        return new HolidayViewGetResponse($this->client->request('/Wl/Schedule/HolidayView/HolidayView.json', $request->params(), 'GET'));
    }
}
