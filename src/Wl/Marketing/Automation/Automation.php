<?php

namespace WlSdk\Wl\Marketing\Automation;

use WlSdk\WlSdkClient;

/**
 * Gets automation data.
 */
class Automation
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
     * @return AutomationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutomationGetRequest $request): AutomationGetResponse
    {
        return new AutomationGetResponse($this->client->request('/Wl/Marketing/Automation/Automation.json', $request->params(), 'GET'));
    }

    /**
     * Create or edit an automation.
     *
     * @return AutomationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AutomationPostRequest $request): AutomationPostResponse
    {
        return new AutomationPostResponse($this->client->request('/Wl/Marketing/Automation/Automation.json', $request->params(), 'POST'));
    }

    /**
     * Duplicate an automation.
     *
     * @return AutomationPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AutomationPutRequest $request): AutomationPutResponse
    {
        return new AutomationPutResponse($this->client->request('/Wl/Marketing/Automation/Automation.json', $request->params(), 'PUT'));
    }

    /**
     * Removes the automation.
     *
     * @return AutomationDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AutomationDeleteRequest $request): AutomationDeleteResponse
    {
        return new AutomationDeleteResponse($this->client->request('/Wl/Marketing/Automation/Automation.json', $request->params(), 'DELETE'));
    }
}
