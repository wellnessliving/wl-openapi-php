<?php
namespace WlSdk\Thoth\WlPay\Transaction\Report;

use WlSdk\WlSdkClient;

/**
 * Gets the daily transaction data.
 */
class TransactionAllPaymentGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the daily transaction data.
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
