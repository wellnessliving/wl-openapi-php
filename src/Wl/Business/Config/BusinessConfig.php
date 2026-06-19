<?php
namespace WlSdk\Wl\Business\Config;

use WlSdk\WlSdkClient;

/**
 * Gets information about a business config.
 */
class BusinessConfig
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about a business config.
     *
     * Used by the booking widget and checkout flow to know the rules governing client interactions: which
     * family member relations are allowed, whether clients or staff must select a location at checkout,
     * what cancellation penalties apply, and whether white-label mode is active.
     *
     * @return BusinessConfigGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessConfigGetRequest $request): BusinessConfigGetResponse
    {
        return new BusinessConfigGetResponse($this->client->request('/Wl/Business/Config/BusinessConfig.json', $request->params(), 'GET'));
    }
}
