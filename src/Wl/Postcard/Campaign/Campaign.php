<?php

namespace WlSdk\Wl\Postcard\Campaign;

use WlSdk\WlSdkClient;

/**
 * Deletes mail campaign.
 */
class Campaign
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes mail campaign.
     *
     * @return CampaignDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(CampaignDeleteRequest $request): CampaignDeleteResponse
    {
        return new CampaignDeleteResponse($this->client->request('/Wl/Postcard/Campaign/Campaign.json', $request->params(), 'DELETE'));
    }
}
