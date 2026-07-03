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
     * Determines the current business, location, and user for the session, taking into account the
     *  application type, franchise settings, and multi-datacenter routing, and returns the resulting
     *  environment data used to bootstrap the client application.
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
     * Switches the current business and location for the session, forwarding the request to another
     *  data center when the target business is hosted elsewhere.
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
