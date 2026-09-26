<?php

namespace WlSdk\Core\AI\LogTriage;

use WlSdk\WlSdkClient;

/**
 * Collects findings for the requested calendar date.
 */
class ConnectionCheck
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Collects findings for the requested calendar date.
     *
     * Searches every registered problem source using the requested date and optional text filter.
     *
     * @return ConnectionCheckGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ConnectionCheckGetRequest $request): ConnectionCheckGetResponse
    {
        return new ConnectionCheckGetResponse($this->client->request('/Core/AI/LogTriage/ConnectionCheck.json', $request->params(), 'GET'));
    }
}
