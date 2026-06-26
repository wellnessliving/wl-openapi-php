<?php

namespace WlSdk\Wl\Page\Backend;

use WlSdk\WlSdkClient;

/**
 * Returns backend settings for the given user inside given business.
 * Also prepares and returns data sets for the left, right, and navigation panels.
 */
class BackendConfig
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns backend settings for the given user inside given business.
Also prepares and returns data sets for the left, right, and navigation panels.
     *
     * @return BackendConfigGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BackendConfigGetRequest $request): BackendConfigGetResponse
    {
        return new BackendConfigGetResponse($this->client->request('/Wl/Page/Backend/BackendConfig.json', $request->params(), 'GET'));
    }
}
