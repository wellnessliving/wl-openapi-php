<?php
namespace WlSdk\Wl\Business\Account;

use WlSdk\WlSdkClient;

/**
 * Generates list of active business keys for the same region as the requesting user (proper permissions required).
 */
class BusinessAccountGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Generates list of active business keys for the same region as the requesting user (proper permissions required).
     *
     * Used internally by WellnessLiving operations tools to enumerate all customer businesses in the current
     * region.
     * Returns only active, non-test businesses; set `is_prospects` to also include prospect businesses that have
     * not
     * yet churned. Requires the `rs.business.view` privilege.
     *
     * @return BusinessAccountGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessAccountGetRequest $request): BusinessAccountGetResponse
    {
        return new BusinessAccountGetResponse($this->client->request('/Wl/Business/Account/BusinessAccount.json', $request->params(), 'GET'));
    }
}
