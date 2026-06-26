<?php

namespace WlSdk\Core\Server\ApcClear;

use WlSdk\WlSdkClient;

/**
 * Deletes a key from APC cache.
 */
class ApcClearChannel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes a key from APC cache.
     *
     * @return ApcClearChannelGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ApcClearChannelGetRequest $request): ApcClearChannelGetResponse
    {
        return new ApcClearChannelGetResponse($this->client->request('/Core/Server/ApcClear/ApcClearChannel.json', $request->params(), 'GET'));
    }
}
