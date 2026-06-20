<?php
namespace WlSdk\Wl\Business\Franchise\Location;

use WlSdk\WlSdkClient;

/**
 * Returns country, region, state, city and location lists of the franchisor.
 */
class BusinessFranchiseLocation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns country, region, state, city and location lists of the franchisor.
     *
     * Used on the franchisor's website location finder to display all franchisee locations on a map or
     * list, grouped by country, state, and city. Results can be filtered to only locations assigned to a
     * specific franchise region or to exclude churned locations. Results are cached for 3 minutes.
     *
     * @return BusinessFranchiseLocationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessFranchiseLocationGetRequest $request): BusinessFranchiseLocationGetResponse
    {
        return new BusinessFranchiseLocationGetResponse($this->client->request('/Wl/Business/Franchise/Location/BusinessFranchiseLocation.json', $request->params(), 'GET'));
    }
}
