<?php

namespace WlSdk\Wl\Tax\Region;

use WlSdk\WlSdkClient;

/**
 * Returns information for confirmation message in case editing tax for specified business.
 */
class TaxRegion
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information for confirmation message in case editing tax for specified business.
     *
     * @return TaxRegionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TaxRegionGetRequest $request): TaxRegionGetResponse
    {
        return new TaxRegionGetResponse($this->client->request('/Wl/Tax/Region/TaxRegion.json', $request->params(), 'GET'));
    }

    /**
     * Update tax value and tax status in a region and in businesses in the region.
     *
     * @return TaxRegionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TaxRegionPostRequest $request): TaxRegionPostResponse
    {
        return new TaxRegionPostResponse($this->client->request('/Wl/Tax/Region/TaxRegion.json', $request->params(), 'POST'));
    }
}
