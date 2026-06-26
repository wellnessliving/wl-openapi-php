<?php

namespace WlSdk\Thoth\MarketingCampaigns\Report\CampaignList;

use WlSdk\WlSdkClient;

/**
 * Gets 'Send campaign' methods.
 */
class SendCampaign
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets 'Send campaign' methods.
     *
     * @return SendCampaignGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SendCampaignGetRequest $request): SendCampaignGetResponse
    {
        return new SendCampaignGetResponse($this->client->request('/Thoth/MarketingCampaigns/Report/CampaignList/SendCampaign.json', $request->params(), 'GET'));
    }
}
