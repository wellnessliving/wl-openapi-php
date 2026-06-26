<?php

namespace WlSdk\Wl\Business\RegionTravel\ControlPanel;

use WlSdk\WlSdkClient;

/**
 * Get quick check status of the business, and travel info if available.
 */
class TravelStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get quick check status of the business, and travel info if available.
     *
     * @return TravelStatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TravelStatusGetRequest $request): TravelStatusGetResponse
    {
        return new TravelStatusGetResponse($this->client->request('/Wl/Business/RegionTravel/ControlPanel/TravelStatus.json', $request->params(), 'GET'));
    }
}
