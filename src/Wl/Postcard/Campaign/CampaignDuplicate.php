<?php

namespace WlSdk\Wl\Postcard\Campaign;

use WlSdk\WlSdkClient;

/**
 * Duplicates mail campaign.
 */
class CampaignDuplicate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Duplicates mail campaign.
     *
     * @return CampaignDuplicatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CampaignDuplicatePostRequest $request): CampaignDuplicatePostResponse
    {
        return new CampaignDuplicatePostResponse($this->client->request('/Wl/Postcard/Campaign/CampaignDuplicate.json', $request->params(), 'POST'));
    }
}
