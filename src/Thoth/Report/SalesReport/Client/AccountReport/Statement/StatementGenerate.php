<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport\Statement;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/Report/SalesReport/Client/AccountReport/Statement/StatementGenerate.json
 */
class StatementGenerate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/Report/SalesReport/Client/AccountReport/Statement/StatementGenerate.json.
     *
     * @return StatementGeneratePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StatementGeneratePostRequest $request): StatementGeneratePostResponse
    {
        return new StatementGeneratePostResponse($this->client->request('/Thoth/Report/SalesReport/Client/AccountReport/Statement/StatementGenerate.json', $request->params(), 'POST'));
    }
}
