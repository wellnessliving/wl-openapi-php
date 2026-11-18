<?php

namespace WlSdk\Wl\Lead\Stage;

use WlSdk\WlSdkClient;

/**
 * Returns the setting "Lead stages are managed by".
 */
class LeadStageManager
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the setting "Lead stages are managed by".
     *
     * The setting tells who manages the lead stages of the locations of the Enterprise that received a push of the
     * lead stages: each location or the Enterprise Headquarters. It is visible to every staff member who can open
     * the
     * Leads settings and to every staff member who can manage the business.
     *
     * @return LeadStageManagerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LeadStageManagerGetRequest $request): LeadStageManagerGetResponse
    {
        return new LeadStageManagerGetResponse($this->client->request('/Wl/Lead/Stage/LeadStageManager.json', $request->params(), 'GET'));
    }

    /**
     * Saves the setting "Lead stages are managed by".
     *
     * Changing the setting takes effect at every location that received a push of the lead stages, and no new push
     * is
     * needed. The change is written to the Edit Log of the business. Only a staff member who can manage the
     * business
     * settings can change the setting.
     *
     * @return LeadStageManagerPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadStageManagerPostRequest $request): LeadStageManagerPostResponse
    {
        return new LeadStageManagerPostResponse($this->client->request('/Wl/Lead/Stage/LeadStageManager.json', $request->params(), 'POST'));
    }
}
