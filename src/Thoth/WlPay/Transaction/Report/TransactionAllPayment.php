<?php

namespace WlSdk\Thoth\WlPay\Transaction\Report;

use WlSdk\WlSdkClient;

/**
 * Returns All Transactions Report data for the specified date range.
 */
class TransactionAllPayment
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns All Transactions Report data for the specified date range.
     *
     * Provides access to the All Transactions Report used for revenue reconciliation and export. The report
     * is generated asynchronously and cached; check `$id_report_status` to determine whether generation is
     * still in progress. Set `$is_refresh` to request regeneration and use `$i_page` to paginate through
     * up to `LIMIT` rows per request.
     *
     * @return TransactionAllPaymentGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TransactionAllPaymentGetRequest $request): TransactionAllPaymentGetResponse
    {
        return new TransactionAllPaymentGetResponse($this->client->request('/Thoth/WlPay/Transaction/Report/TransactionAllPayment.json', $request->params(), 'GET'));
    }
}
