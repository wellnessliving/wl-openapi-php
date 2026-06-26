<?php

namespace WlSdk\Wl\Marketing\Automation;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Marketing/Automation/AutomationRetroactive.json
 */
class AutomationRetroactive
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Marketing/Automation/AutomationRetroactive.json.
     *
     * @return AutomationRetroactivePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AutomationRetroactivePostRequest $request): AutomationRetroactivePostResponse
    {
        return new AutomationRetroactivePostResponse($this->client->request('/Wl/Marketing/Automation/AutomationRetroactive.json', $request->params(), 'POST'));
    }
}
