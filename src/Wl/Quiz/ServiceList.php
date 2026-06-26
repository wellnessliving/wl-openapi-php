<?php

namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Quiz/ServiceList.json
 */
class ServiceList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Quiz/ServiceList.json.
     *
     * @return ServiceListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceListGetRequest $request): ServiceListGetResponse
    {
        return new ServiceListGetResponse($this->client->request('/Wl/Quiz/ServiceList.json', $request->params(), 'GET'));
    }
}
