<?php

namespace WlSdk\Thoth\WlPay\Transaction;

use WlSdk\WlSdkClient;

/**
 * Get a payment status for multiple transactions.
 */
class Status
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get a payment status for multiple transactions.
     *
     * @return StatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StatusGetRequest $request): StatusGetResponse
    {
        return new StatusGetResponse($this->client->request('/Thoth/WlPay/Transaction/Status.json', $request->params(), 'GET'));
    }

    /**
     * Get a payment status for multiple transactions via POST body.
     *
     * This method exists to fix an HTTP 414 "URI Too Long" error that occurred when a report contained a large
     * number
     *  of transactions (e.g. a full month of Batch Reconciliation).
     * The JS caller `StatusReportCell.afterLoadTable()` passed all transaction keys as a JSON-encoded GET query
     *  parameter, causing the URL to exceed server limits.
     * Switching to POST moves the payload to the request body, which has no length restriction.
     *
     * @return StatusPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StatusPostRequest $request): StatusPostResponse
    {
        return new StatusPostResponse($this->client->request('/Thoth/WlPay/Transaction/Status.json', $request->params(), 'POST'));
    }

    /**
     * Changes status of payment transaction.
     *
     * @return StatusPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(StatusPutRequest $request): StatusPutResponse
    {
        return new StatusPutResponse($this->client->request('/Thoth/WlPay/Transaction/Status.json', $request->params(), 'PUT'));
    }
}
