<?php

namespace WlSdk\Core\Spa\Application;

use WlSdk\WlSdkClient;

/**
 * Gets information of application.
 */
class SpaApplication
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information of application.
     *
     * @return SpaApplicationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SpaApplicationGetRequest $request): SpaApplicationGetResponse
    {
        return new SpaApplicationGetResponse($this->client->request('/Core/Spa/Application/SpaApplication.json', $request->params(), 'GET'));
    }
}
