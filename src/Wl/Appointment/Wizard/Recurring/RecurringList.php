<?php

namespace WlSdk\Wl\Appointment\Wizard\Recurring;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Appointment/Wizard/Recurring/RecurringList.json
 */
class RecurringList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Appointment/Wizard/Recurring/RecurringList.json.
     *
     * @deprecated Use {@link \Wl\Appointment\Wizard\Recurring\RecurringList68Api} instead.
     *
     * @return RecurringListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RecurringListGetRequest $request): RecurringListGetResponse
    {
        return new RecurringListGetResponse($this->client->request('/Wl/Appointment/Wizard/Recurring/RecurringList.json', $request->params(), 'GET'));
    }
}
