<?php

namespace WlSdk\Thoth\MarketingCampaigns\Report\CampaignDetail;

use WlSdk\WlSdkClient;

/**
 * Gets mail campaign tracking data. Used for 'Mail campaign detail'  report.
 */
class ClickTracking
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets mail campaign tracking data. Used for 'Mail campaign detail'  report.
     *
     * @return ClickTrackingGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ClickTrackingGetRequest $request): ClickTrackingGetResponse
    {
        return new ClickTrackingGetResponse($this->client->request('/Thoth/MarketingCampaigns/Report/CampaignDetail/ClickTracking.json', $request->params(), 'GET'));
    }
}
