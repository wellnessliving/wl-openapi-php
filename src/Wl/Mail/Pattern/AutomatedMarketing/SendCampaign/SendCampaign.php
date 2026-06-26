<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

use WlSdk\WlSdkClient;

/**
 * Gets campaign data.
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
     * Gets campaign data.
     *
     * @return SendCampaignGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SendCampaignGetRequest $request): SendCampaignGetResponse
    {
        return new SendCampaignGetResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/SendCampaign/SendCampaign.json', $request->params(), 'GET'));
    }

    /**
     * Saves 'Send campaign'.
     *
     * @return SendCampaignPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SendCampaignPostRequest $request): SendCampaignPostResponse
    {
        return new SendCampaignPostResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/SendCampaign/SendCampaign.json', $request->params(), 'POST'));
    }
}
