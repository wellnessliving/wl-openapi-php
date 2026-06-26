<?php

namespace WlSdk\Wl\Page\Backend;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Page/Backend/Config.json
 */
class Config
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Page/Backend/Config.json.
     *
     * @return ConfigGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ConfigGetRequest $request): ConfigGetResponse
    {
        return new ConfigGetResponse($this->client->request('/Wl/Page/Backend/Config.json', $request->params(), 'GET'));
    }

    /**
     * Calls PUT /Wl/Page/Backend/Config.json.
     *
     * @return ConfigPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ConfigPutRequest $request): ConfigPutResponse
    {
        return new ConfigPutResponse($this->client->request('/Wl/Page/Backend/Config.json', $request->params(), 'PUT'));
    }
}
