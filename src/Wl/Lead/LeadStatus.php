<?php

namespace WlSdk\Wl\Lead;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Lead/LeadStatus.json
 */
class LeadStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Lead/LeadStatus.json.
     *
     * @return LeadStatusPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadStatusPostRequest $request): LeadStatusPostResponse
    {
        return new LeadStatusPostResponse($this->client->request('/Wl/Lead/LeadStatus.json', $request->params(), 'POST'));
    }
}
