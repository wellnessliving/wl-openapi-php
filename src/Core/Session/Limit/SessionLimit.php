<?php

namespace WlSdk\Core\Session\Limit;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Session/Limit/SessionLimit.json
 */
class SessionLimit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Session/Limit/SessionLimit.json.
     *
     * @return SessionLimitGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SessionLimitGetRequest $request): SessionLimitGetResponse
    {
        return new SessionLimitGetResponse($this->client->request('/Core/Session/Limit/SessionLimit.json', $request->params(), 'GET'));
    }
}
