<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule\Frontend;

use WlSdk\WlSdkClient;

/**
 * Retrieves lifetime visit totals.
 */
class LifetimeTotals
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves lifetime visit totals.
     *
     * Returns aggregated lifetime attendance statistics for the specified user in the given
     *  business. Used to display summary visit counts and related metrics on the client profile
     *  schedule page.
     *
     * @return LifetimeTotalsGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LifetimeTotalsGetRequest $request): LifetimeTotalsGetResponse
    {
        return new LifetimeTotalsGetResponse($this->client->request('/Wl/Profile/Attendance/Schedule/Frontend/LifetimeTotals.json', $request->params(), 'GET'));
    }
}
