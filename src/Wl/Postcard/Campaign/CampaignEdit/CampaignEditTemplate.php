<?php

namespace WlSdk\Wl\Postcard\Campaign\CampaignEdit;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Postcard/Campaign/CampaignEdit/CampaignEditTemplate.json
 */
class CampaignEditTemplate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Postcard/Campaign/CampaignEdit/CampaignEditTemplate.json.
     *
     * @return CampaignEditTemplateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CampaignEditTemplateGetRequest $request): CampaignEditTemplateGetResponse
    {
        return new CampaignEditTemplateGetResponse($this->client->request('/Wl/Postcard/Campaign/CampaignEdit/CampaignEditTemplate.json', $request->params(), 'GET'));
    }
}
