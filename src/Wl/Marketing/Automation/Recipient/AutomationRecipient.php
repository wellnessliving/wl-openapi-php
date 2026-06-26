<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

use WlSdk\WlSdkClient;

/**
 * Returns the list of recipients for the given automation within the specified date range.
 */
class AutomationRecipient
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of recipients for the given automation within the specified date range.
     *
     * @return AutomationRecipientGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutomationRecipientGetRequest $request): AutomationRecipientGetResponse
    {
        return new AutomationRecipientGetResponse($this->client->request('/Wl/Marketing/Automation/Recipient/AutomationRecipient.json', $request->params(), 'GET'));
    }

    /**
     * Manually adds selected clients to the automation as recipients.
     *
     * Clients who are already in progress are skipped and counted separately.
     * Only new clients are scheduled for execution.
     *
     * @return AutomationRecipientPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AutomationRecipientPostRequest $request): AutomationRecipientPostResponse
    {
        return new AutomationRecipientPostResponse($this->client->request('/Wl/Marketing/Automation/Recipient/AutomationRecipient.json', $request->params(), 'POST'));
    }
}
