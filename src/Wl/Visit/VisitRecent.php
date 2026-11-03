<?php

namespace WlSdk\Wl\Visit;

use WlSdk\WlSdkClient;

/**
 * Returns recent visit statistics for the user at the business.
 */
class VisitRecent
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns recent visit statistics for the user at the business.
     *
     * Counts attended visits in the last 30 and 7 days and finds the last visit that is not a gym check-in
     *  of today. The day boundaries are computed in the time zone of the location given in
     *  {@link \WlSdk\Wl\Visit\VisitRecent}.
     *
     * @return VisitRecentGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VisitRecentGetRequest $request): VisitRecentGetResponse
    {
        return new VisitRecentGetResponse($this->client->request('/Wl/Visit/VisitRecent.json', $request->params(), 'GET'));
    }
}
