<?php

namespace WlSdk\Wl\Integration\Zoom;

use WlSdk\WlSdkClient;

/**
 * Deauthorization endpoint.
 */
class Connection
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deauthorization endpoint.
     *
     * @return ConnectionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ConnectionPostRequest $request): ConnectionPostResponse
    {
        return new ConnectionPostResponse($this->client->request('/Wl/Integration/Zoom/Connection.json', $request->params(), 'POST'));
    }

    /**
     * Calls DELETE /Wl/Integration/Zoom/Connection.json.
     *
     * @return ConnectionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ConnectionDeleteRequest $request): ConnectionDeleteResponse
    {
        return new ConnectionDeleteResponse($this->client->request('/Wl/Integration/Zoom/Connection.json', $request->params(), 'DELETE'));
    }
}
