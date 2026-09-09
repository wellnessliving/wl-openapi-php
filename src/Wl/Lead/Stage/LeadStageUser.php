<?php

namespace WlSdk\Wl\Lead\Stage;

use WlSdk\WlSdkClient;

/**
 * Sets the lead stage of the client.
 */
class LeadStageUser
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sets the lead stage of the client.
     *
     * If the client is already in this stage, nothing is changed.
     *
     * @return LeadStageUserPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadStageUserPostRequest $request): LeadStageUserPostResponse
    {
        return new LeadStageUserPostResponse($this->client->request('/Wl/Lead/Stage/LeadStageUser.json', $request->params(), 'POST'));
    }
}
