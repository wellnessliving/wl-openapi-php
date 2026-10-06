<?php

namespace WlSdk\Wl\Lead\Stage;

use WlSdk\WlSdkClient;

/**
 * Finds out what moving the client into the lead stage is going to do.
 */
class LeadStageImpact
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finds out what moving the client into the lead stage is going to do.
     *
     * @return LeadStageImpactGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LeadStageImpactGetRequest $request): LeadStageImpactGetResponse
    {
        return new LeadStageImpactGetResponse($this->client->request('/Wl/Lead/Stage/LeadStageImpact.json', $request->params(), 'GET'));
    }
}
