<?php

namespace WlSdk\Wl\Business\AmazonRegion;

use WlSdk\WlSdkClient;

/**
 * Returns the Amazon region ID for each of the requested business keys.
 */
class AmazonRegion
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the Amazon region ID for each of the requested business keys.
     *
     * Used to determine which data center stores the data for a given set of businesses. Knowing the region
     * is required before routing API calls across data centers. Returns `0` for businesses whose region
     * is not set. All requested business keys must exist.
     *
     * @return AmazonRegionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AmazonRegionGetRequest $request): AmazonRegionGetResponse
    {
        return new AmazonRegionGetResponse($this->client->request('/Wl/Business/AmazonRegion/AmazonRegion.json', $request->params(), 'GET'));
    }
}
