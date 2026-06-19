<?php
namespace WlSdk\Wl\Integration\Curves;

use WlSdk\WlSdkClient;

/**
 * Returns country, region, state, city and location lists of the franchisor.
 * This method returns all the information from the parent
 * `get()` and the Curves territory ID.
 */
class CurvesFranchiseLocation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns country, region, state, city and location lists of the franchisor.
This method returns all the information from the parent
`get()` and the Curves territory ID.
     *
     * Extends the parent location list with the Curves-specific territory ID (`k_territory_id`) for each
     * franchisee location by joining against the Curves franchisee integration table.
     *
     * @return CurvesFranchiseLocationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CurvesFranchiseLocationGetRequest $request): CurvesFranchiseLocationGetResponse
    {
        return new CurvesFranchiseLocationGetResponse($this->client->request('/Wl/Integration/Curves/CurvesFranchiseLocation.json', $request->params(), 'GET'));
    }
}
