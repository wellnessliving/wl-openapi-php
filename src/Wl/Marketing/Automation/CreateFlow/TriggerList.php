<?php

namespace WlSdk\Wl\Marketing\Automation\CreateFlow;

use WlSdk\WlSdkClient;

/**
 * Gets pre-built automation template data.
 */
class TriggerList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets pre-built automation template data.
     *
     * @return TriggerListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TriggerListGetRequest $request): TriggerListGetResponse
    {
        return new TriggerListGetResponse($this->client->request('/Wl/Marketing/Automation/CreateFlow/TriggerList.json', $request->params(), 'GET'));
    }
}
