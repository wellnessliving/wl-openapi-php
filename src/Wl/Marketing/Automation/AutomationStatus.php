<?php

namespace WlSdk\Wl\Marketing\Automation;

use WlSdk\WlSdkClient;

/**
 * Activate or deactivate an automation.
 */
class AutomationStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Activate or deactivate an automation.
     *
     * @return AutomationStatusPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AutomationStatusPostRequest $request): AutomationStatusPostResponse
    {
        return new AutomationStatusPostResponse($this->client->request('/Wl/Marketing/Automation/AutomationStatus.json', $request->params(), 'POST'));
    }
}
