<?php

namespace WlSdk\Wl\Lead\Stage;

use WlSdk\WlSdkClient;

/**
 * Gets a list of lead stages of the business.
 */
class LeadStageList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of lead stages of the business.
     *
     * Returns all lead stages configured for the specified business, both system-defined and custom ones,
     * with their order, name and icon. In a case {@link \WlSdk\Wl\Lead\Stage\LeadStageList} is `true`,
     * the number of clients of every stage is returned too.
     *
     * @return LeadStageListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LeadStageListGetRequest $request): LeadStageListGetResponse
    {
        return new LeadStageListGetResponse($this->client->request('/Wl/Lead/Stage/LeadStageList.json', $request->params(), 'GET'));
    }
}
