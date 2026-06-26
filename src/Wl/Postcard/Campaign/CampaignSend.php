<?php

namespace WlSdk\Wl\Postcard\Campaign;

use WlSdk\WlSdkClient;

/**
 * Performs force sending of mail campaign.
 */
class CampaignSend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs force sending of mail campaign.
     *
     * @return CampaignSendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CampaignSendPostRequest $request): CampaignSendPostResponse
    {
        return new CampaignSendPostResponse($this->client->request('/Wl/Postcard/Campaign/CampaignSend.json', $request->params(), 'POST'));
    }
}
