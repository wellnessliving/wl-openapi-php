<?php

namespace WlSdk\Core\Passport\FusionAuth;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Passport/FusionAuth/Connector.json
 */
class Connector
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Passport/FusionAuth/Connector.json.
     *
     * @return ConnectorPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ConnectorPostRequest $request): ConnectorPostResponse
    {
        return new ConnectorPostResponse($this->client->request('/Core/Passport/FusionAuth/Connector.json', $request->params(), 'POST'));
    }
}
