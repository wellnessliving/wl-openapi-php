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
     * The client must not be in the stage yet. The caller is expected to ask only about a stage the client is not
     * in yet.
     * The client must be a member of the business, or a franchise client of it: a traveller or an enterprise
     * client.
     * The access to the profile of the client is not checked, because the Lead Management report and the Recent
     * Leads
     * widget call this check too, and a check of the profile could block a stage change that they allow now.
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
