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

    /**
     * Reschedules a previously scheduled bulk billing to a new date and time.
     *
     * A reschedule always targets an explicit date and time.
     * Only a batch that has not started billing yet can be rescheduled.
     *
     * @return BulkBillingPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BulkBillingPutRequest $request): BulkBillingPutResponse
    {
        return new BulkBillingPutResponse($this->client->request('/Wl/Billing/Bulk/BulkBilling.json', $request->params(), 'PUT'));
    }

    /**
     * Cancels a scheduled bulk billing so that it is never billed.
     *
     * Only a batch that has not started billing yet can be cancelled.
     *
     * @return BulkBillingDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(BulkBillingDeleteRequest $request): BulkBillingDeleteResponse
    {
        return new BulkBillingDeleteResponse($this->client->request('/Wl/Billing/Bulk/BulkBilling.json', $request->params(), 'DELETE'));
    }
}
