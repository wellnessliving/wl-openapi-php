<?php

namespace WlSdk\Wl\Marketing\Automation\Prebuilt;

use WlSdk\WlSdkClient;

/**
 * Gets automation data.
 */
class AutomationPrebuilt
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets automation data.
     *
     * @return AutomationPrebuiltGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutomationPrebuiltGetRequest $request): AutomationPrebuiltGetResponse
    {
        return new AutomationPrebuiltGetResponse($this->client->request('/Wl/Marketing/Automation/Prebuilt/AutomationPrebuilt.json', $request->params(), 'GET'));
    }
}
