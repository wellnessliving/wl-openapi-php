<?php

namespace WlSdk\Wl\Billing\Bulk;

use WlSdk\WlSdkClient;

/**
 * Schedules the bulk billing.
 */
class BulkBilling
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Schedules the bulk billing.
     *
     * Reads the prepared data from the temporary session by the review id and schedules the billing. The
     * eligibility
     * and restriction checks were already done during preparation, so they are not repeated here.
     *
     * @return BulkBillingPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BulkBillingPostRequest $request): BulkBillingPostResponse
    {
        return new BulkBillingPostResponse($this->client->request('/Wl/Billing/Bulk/BulkBilling.json', $request->params(), 'POST'));
    }
}
