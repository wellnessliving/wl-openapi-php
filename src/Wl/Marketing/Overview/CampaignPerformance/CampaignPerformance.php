<?php

namespace WlSdk\Wl\Marketing\Overview\CampaignPerformance;

use WlSdk\WlSdkClient;

/**
 * Get campaign performance data of the business.
 */
class CampaignPerformance
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get campaign performance data of the business.
     *
     * @return CampaignPerformanceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CampaignPerformanceGetRequest $request): CampaignPerformanceGetResponse
    {
        return new CampaignPerformanceGetResponse($this->client->request('/Wl/Marketing/Overview/CampaignPerformance/CampaignPerformance.json', $request->params(), 'GET'));
    }
}
