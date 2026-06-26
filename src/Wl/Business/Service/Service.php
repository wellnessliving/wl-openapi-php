<?php

namespace WlSdk\Wl\Business\Service;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Service/Service.json
 */
class Service
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Service/Service.json.
     *
     * @return ServiceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceGetRequest $request): ServiceGetResponse
    {
        return new ServiceGetResponse($this->client->request('/Wl/Business/Service/Service.json', $request->params(), 'GET'));
    }
}
