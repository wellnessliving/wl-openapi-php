<?php

namespace WlSdk\Wl\Spivi;

use WlSdk\WlSdkClient;

/**
 * Retrieves Spivi account information.
 */
class SpiviConnect
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves Spivi account information.
     *
     * @return SpiviConnectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SpiviConnectGetRequest $request): SpiviConnectGetResponse
    {
        return new SpiviConnectGetResponse($this->client->request('/Wl/Spivi/SpiviConnect.json', $request->params(), 'GET'));
    }

    /**
     * Connecting with Spivi, getting a token.
     *
     * @return SpiviConnectPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SpiviConnectPostRequest $request): SpiviConnectPostResponse
    {
        return new SpiviConnectPostResponse($this->client->request('/Wl/Spivi/SpiviConnect.json', $request->params(), 'POST'));
    }

    /**
     * Disconnecting with Spivi, remove a token.
     *
     * @return SpiviConnectDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(SpiviConnectDeleteRequest $request): SpiviConnectDeleteResponse
    {
        return new SpiviConnectDeleteResponse($this->client->request('/Wl/Spivi/SpiviConnect.json', $request->params(), 'DELETE'));
    }
}
