<?php

namespace WlSdk\Wl\Postcard\Campaign\CampaignEdit;

use WlSdk\WlSdkClient;

/**
 * Calculates summary information about mail campaign.
 */
class CampaignEditSummary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates summary information about mail campaign.
     *
     * @return CampaignEditSummaryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CampaignEditSummaryGetRequest $request): CampaignEditSummaryGetResponse
    {
        return new CampaignEditSummaryGetResponse($this->client->request('/Wl/Postcard/Campaign/CampaignEdit/CampaignEditSummary.json', $request->params(), 'GET'));
    }
}
