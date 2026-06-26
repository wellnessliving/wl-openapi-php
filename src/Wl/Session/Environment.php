<?php

namespace WlSdk\Wl\Session;

use WlSdk\WlSdkClient;

/**
 * Returns current session environment.
 */
class Environment
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns current session environment.
     *
     * @return EnvironmentGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EnvironmentGetRequest $request): EnvironmentGetResponse
    {
        return new EnvironmentGetResponse($this->client->request('/Wl/Session/Environment.json', $request->params(), 'GET'));
    }

    /**
     * Saves current location of business for current user.
     *
     * @return EnvironmentPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EnvironmentPutRequest $request): EnvironmentPutResponse
    {
        return new EnvironmentPutResponse($this->client->request('/Wl/Session/Environment.json', $request->params(), 'PUT'));
    }
}
