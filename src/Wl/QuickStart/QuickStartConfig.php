<?php

namespace WlSdk\Wl\QuickStart;

use WlSdk\WlSdkClient;

/**
 * Gets stored quick start configuration.
 */
class QuickStartConfig
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets stored quick start configuration.
     *
     * @return QuickStartConfigGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuickStartConfigGetRequest $request): QuickStartConfigGetResponse
    {
        return new QuickStartConfigGetResponse($this->client->request('/Wl/QuickStart/QuickStartConfig.json', $request->params(), 'GET'));
    }

    /**
     * Updates stored quick start configuration.
     *
     * @return QuickStartConfigPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuickStartConfigPostRequest $request): QuickStartConfigPostResponse
    {
        return new QuickStartConfigPostResponse($this->client->request('/Wl/QuickStart/QuickStartConfig.json', $request->params(), 'POST'));
    }
}
