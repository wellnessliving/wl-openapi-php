<?php

namespace WlSdk\Wl\Visit\VisitHistoricalCount;

use WlSdk\WlSdkClient;

/**
 * Change value of historical visit.
 */
class VisitHistoricalCount
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Change value of historical visit.
     *
     * @return VisitHistoricalCountPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(VisitHistoricalCountPostRequest $request): VisitHistoricalCountPostResponse
    {
        return new VisitHistoricalCountPostResponse($this->client->request('/Wl/Visit/VisitHistoricalCount/VisitHistoricalCount.json', $request->params(), 'POST'));
    }
}
