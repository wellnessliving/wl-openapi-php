<?php

namespace WlSdk\Wl\Business\Application;

use WlSdk\WlSdkClient;

/**
 * Gets information about the business application.
 */
class Application
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about the business application.
     *
     * @return ApplicationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ApplicationGetRequest $request): ApplicationGetResponse
    {
        return new ApplicationGetResponse($this->client->request('/Wl/Business/Application/Application.json', $request->params(), 'GET'));
    }
}
