<?php

namespace WlSdk\Wl\Postcard\Campaign\CampaignLanding;

use WlSdk\WlSdkClient;

/**
 * Enables direct mail campaign for a specified business.
 */
class CampaignLanding
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Enables direct mail campaign for a specified business.
     *
     * @return CampaignLandingPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CampaignLandingPostRequest $request): CampaignLandingPostResponse
    {
        return new CampaignLandingPostResponse($this->client->request('/Wl/Postcard/Campaign/CampaignLanding/CampaignLanding.json', $request->params(), 'POST'));
    }
}
