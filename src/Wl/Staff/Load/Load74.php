<?php

namespace WlSdk\Wl\Staff\Load;

use WlSdk\WlSdkClient;

/**
 * Checks if staff member is clocked in.
 */
class Load74
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if staff member is clocked in.
     *
     * @return Load74GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Load74GetRequest $request): Load74GetResponse
    {
        return new Load74GetResponse($this->client->request('/Wl/Staff/Load/Load74.json', $request->params(), 'GET'));
    }

    /**
     * Clocks staff member in (if he is clocked out) or out (if he is clocked in).
     *
     * @return Load74PutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(Load74PutRequest $request): Load74PutResponse
    {
        return new Load74PutResponse($this->client->request('/Wl/Staff/Load/Load74.json', $request->params(), 'PUT'));
    }
}
