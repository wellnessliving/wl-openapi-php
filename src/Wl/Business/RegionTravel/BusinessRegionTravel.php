<?php

namespace WlSdk\Wl\Business\RegionTravel;

use WlSdk\WlSdkClient;

/**
 * Checks permission of user, and whether business can be transferred to target region.
 */
class BusinessRegionTravel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks permission of user, and whether business can be transferred to target region.
     *
     * @return BusinessRegionTravelGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessRegionTravelGetRequest $request): BusinessRegionTravelGetResponse
    {
        return new BusinessRegionTravelGetResponse($this->client->request('/Wl/Business/RegionTravel/BusinessRegionTravel.json', $request->params(), 'GET'));
    }

    /**
     * Initiates business region travel.
     *
     * @return BusinessRegionTravelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessRegionTravelPostRequest $request): BusinessRegionTravelPostResponse
    {
        return new BusinessRegionTravelPostResponse($this->client->request('/Wl/Business/RegionTravel/BusinessRegionTravel.json', $request->params(), 'POST'));
    }
}
