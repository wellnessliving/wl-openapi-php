<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CampaignResend;

use WlSdk\WlSdkClient;

/**
 * Retrieves particular information about campaign.
 */
class CampaignResend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves particular information about campaign.
     *
     * @return CampaignResendGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CampaignResendGetRequest $request): CampaignResendGetResponse
    {
        return new CampaignResendGetResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/CampaignResend/CampaignResend.json', $request->params(), 'GET'));
    }

    /**
     * Performs resending of mail campaign.
     *
     * @return CampaignResendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CampaignResendPostRequest $request): CampaignResendPostResponse
    {
        return new CampaignResendPostResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/CampaignResend/CampaignResend.json', $request->params(), 'POST'));
    }
}
