<?php

namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * Get applications data.
 */
class ApplicationList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get applications data.
     *
     * @return ApplicationListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ApplicationListGetRequest $request): ApplicationListGetResponse
    {
        return new ApplicationListGetResponse($this->client->request('/Core/Request/Api/Application/ApplicationList.json', $request->params(), 'GET'));
    }
}
