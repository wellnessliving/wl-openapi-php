<?php

namespace WlSdk\Wl\Schedule\Config;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class ConfigDefault
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process POST query.
     *
     * @return ConfigDefaultPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ConfigDefaultPostRequest $request): ConfigDefaultPostResponse
    {
        return new ConfigDefaultPostResponse($this->client->request('/Wl/Schedule/Config/ConfigDefault.json', $request->params(), 'POST'));
    }
}
