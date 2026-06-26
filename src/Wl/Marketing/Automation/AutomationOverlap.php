<?php

namespace WlSdk\Wl\Marketing\Automation;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Marketing/Automation/AutomationOverlap.json
 */
class AutomationOverlap
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Marketing/Automation/AutomationOverlap.json.
     *
     * @return AutomationOverlapGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutomationOverlapGetRequest $request): AutomationOverlapGetResponse
    {
        return new AutomationOverlapGetResponse($this->client->request('/Wl/Marketing/Automation/AutomationOverlap.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Marketing/Automation/AutomationOverlap.json.
     *
     * @return AutomationOverlapPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AutomationOverlapPostRequest $request): AutomationOverlapPostResponse
    {
        return new AutomationOverlapPostResponse($this->client->request('/Wl/Marketing/Automation/AutomationOverlap.json', $request->params(), 'POST'));
    }
}
