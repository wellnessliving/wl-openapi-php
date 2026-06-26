<?php

namespace WlSdk\Wl\Marketing\Automation\List;

use WlSdk\WlSdkClient;

/**
 * Gets automation data.
 */
class AutomationList
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
     * @return AutomationListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutomationListGetRequest $request): AutomationListGetResponse
    {
        return new AutomationListGetResponse($this->client->request('/Wl/Marketing/Automation/List/AutomationList.json', $request->params(), 'GET'));
    }
}
