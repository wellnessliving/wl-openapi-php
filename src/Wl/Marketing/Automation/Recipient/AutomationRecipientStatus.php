<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

use WlSdk\WlSdkClient;

/**
 * Returns the current status of a recipient in an automation flow.
 */
class AutomationRecipientStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the current status of a recipient in an automation flow.
     *
     * When a single user is specified, returns the status of their most recent enrollment in the automation.
     *
     * When a member group is specified, returns a map of recipient UIDs to their statuses for all
     *  users in that group who have a record in the automation.
     *
     * @return AutomationRecipientStatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutomationRecipientStatusGetRequest $request): AutomationRecipientStatusGetResponse
    {
        return new AutomationRecipientStatusGetResponse($this->client->request('/Wl/Marketing/Automation/Recipient/AutomationRecipientStatus.json', $request->params(), 'GET'));
    }

    /**
     * Excludes a recipient from an automation flow.
     *
     * Marks the given user as excluded so they will no longer receive further steps of the automation.
     * If the user is not currently in the flow the call has no effect.
     *
     * @return AutomationRecipientStatusPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AutomationRecipientStatusPostRequest $request): AutomationRecipientStatusPostResponse
    {
        return new AutomationRecipientStatusPostResponse($this->client->request('/Wl/Marketing/Automation/Recipient/AutomationRecipientStatus.json', $request->params(), 'POST'));
    }
}
