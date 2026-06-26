<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\BalanceHistoryStatement;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/Report/SalesReport/Client/BalanceHistoryStatement/PayAccountCharge.json
 */
class PayAccountCharge
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/Report/SalesReport/Client/BalanceHistoryStatement/PayAccountCharge.json.
     *
     * @return PayAccountChargeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PayAccountChargeGetRequest $request): PayAccountChargeGetResponse
    {
        return new PayAccountChargeGetResponse($this->client->request('/Thoth/Report/SalesReport/Client/BalanceHistoryStatement/PayAccountCharge.json', $request->params(), 'GET'));
    }
}
