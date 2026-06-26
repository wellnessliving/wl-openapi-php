<?php

namespace WlSdk\Wl\DoorAccess\Brivo;

use WlSdk\WlSdkClient;

/**
 * Connecting with Brivo, getting a token.
 */
class Connect
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Connecting with Brivo, getting a token.
     *
     * @return ConnectPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ConnectPostRequest $request): ConnectPostResponse
    {
        return new ConnectPostResponse($this->client->request('/Wl/DoorAccess/Brivo/Connect.json', $request->params(), 'POST'));
    }

    /**
     * Update credentials. This functionality is requested only for Demo and Staging for testing purposes.
     *
     * @return ConnectPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ConnectPutRequest $request): ConnectPutResponse
    {
        return new ConnectPutResponse($this->client->request('/Wl/DoorAccess/Brivo/Connect.json', $request->params(), 'PUT'));
    }

    /**
     * Disconnecting with Brivo, remove a token.
     *
     * @return ConnectDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ConnectDeleteRequest $request): ConnectDeleteResponse
    {
        return new ConnectDeleteResponse($this->client->request('/Wl/DoorAccess/Brivo/Connect.json', $request->params(), 'DELETE'));
    }
}
