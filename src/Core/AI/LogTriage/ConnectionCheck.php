<?php

namespace WlSdk\Core\AI\LogTriage;

use WlSdk\WlSdkClient;

/**
 * Returns a fixed connection value and, when requested, selected findings.
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
     * Returns a fixed connection value and, when requested, selected findings.
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
