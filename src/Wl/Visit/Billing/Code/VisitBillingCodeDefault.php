<?php

namespace WlSdk\Wl\Visit\Billing\Code;

use WlSdk\WlSdkClient;

/**
 * Returns the codes suggested for a visit.
 */
class VisitBillingCodeDefault
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the codes suggested for a visit.
     *
     * The default codes of the service and of the staff member, and up to 5 codes most used for the client, each
     * list
     * separately. The current staff member must be able to assign billing codes to appointments.
     *
     * @return VisitBillingCodeDefaultGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VisitBillingCodeDefaultGetRequest $request): VisitBillingCodeDefaultGetResponse
    {
        return new VisitBillingCodeDefaultGetResponse($this->client->request('/Wl/Visit/Billing/Code/VisitBillingCodeDefault.json', $request->params(), 'GET'));
    }
}
