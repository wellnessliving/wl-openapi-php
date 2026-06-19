<?php
namespace WlSdk\Wl\Collector;

use WlSdk\WlSdkClient;

/**
 * Returns a list of debt payment transactions for the specified business within the given date range.
 */
class DebtTransactionGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of debt payment transactions for the specified business within the given date range.
     *
     * Used by the Collections module to audit payments made against debts. The default date range
     * covers the previous day relative to the business timezone. Requires an active Collections
     * subscription and either the business privilege or emulation access.
     *
     * @return DebtTransactionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DebtTransactionGetRequest $request): DebtTransactionGetResponse
    {
        return new DebtTransactionGetResponse($this->client->request('/Wl/Collector/DebtTransaction.json', $request->params(), 'GET'));
    }
}
