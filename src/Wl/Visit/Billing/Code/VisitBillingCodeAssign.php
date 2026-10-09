<?php

namespace WlSdk\Wl\Visit\Billing\Code;

use WlSdk\WlSdkClient;

/**
 * Returns the billing codes applied to a visit and the history of their changes.
 */
class VisitBillingCodeAssign
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the billing codes applied to a visit and the history of their changes.
     *
     * A staff member who can not assign billing codes gets the custom codes only, without the diagnostic codes and
     * without the history.
     *
     * @return VisitBillingCodeAssignGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VisitBillingCodeAssignGetRequest $request): VisitBillingCodeAssignGetResponse
    {
        return new VisitBillingCodeAssignGetResponse($this->client->request('/Wl/Visit/Billing/Code/VisitBillingCodeAssign.json', $request->params(), 'GET'));
    }

    /**
     * Applies billing codes to a visit.
     *
     * The given list replaces the codes of the visit as a whole. A code the visit has already keeps the type and
     * the
     * description it was applied with. A new code is looked up in the billing code list of the business first,
     * then
     * among the ICD-10-CM diagnostic codes if the business has turned them on. A code found nowhere is a temporary
     * code for this visit only: it requires the access to create temporary codes, and it is not added to the
     * billing
     * code list. Every added and every removed code is logged with the reason and, if the business requires it,
     * the
     * signature.
     *
     * @return VisitBillingCodeAssignPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(VisitBillingCodeAssignPostRequest $request): VisitBillingCodeAssignPostResponse
    {
        return new VisitBillingCodeAssignPostResponse($this->client->request('/Wl/Visit/Billing/Code/VisitBillingCodeAssign.json', $request->params(), 'POST'));
    }
}
