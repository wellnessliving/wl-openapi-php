<?php

namespace WlSdk\Wl\Appointment\Wizard\Recurring;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Appointment/Wizard/Recurring/RecurringList68.json
 */
class RecurringList68
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Appointment/Wizard/Recurring/RecurringList68.json.
     *
     * @return RecurringList68GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RecurringList68GetRequest $request): RecurringList68GetResponse
    {
        return new RecurringList68GetResponse($this->client->request('/Wl/Appointment/Wizard/Recurring/RecurringList68.json', $request->params(), 'GET'));
    }
}
