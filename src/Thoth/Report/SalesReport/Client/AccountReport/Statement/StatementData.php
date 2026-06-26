<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport\Statement;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/Report/SalesReport/Client/AccountReport/Statement/StatementData.json
 */
class StatementData
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/Report/SalesReport/Client/AccountReport/Statement/StatementData.json.
     *
     * @return StatementDataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StatementDataGetRequest $request): StatementDataGetResponse
    {
        return new StatementDataGetResponse($this->client->request('/Thoth/Report/SalesReport/Client/AccountReport/Statement/StatementData.json', $request->params(), 'GET'));
    }
}
