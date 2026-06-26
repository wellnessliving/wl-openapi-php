<?php

namespace WlSdk\Wl\Service;

use WlSdk\WlSdkClient;

/**
 * Loads appointment data.
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
     * Loads appointment data.
     *
     * @return ServiceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceGetRequest $request): ServiceGetResponse
    {
        return new ServiceGetResponse($this->client->request('/Wl/Service/Service.json', $request->params(), 'GET'));
    }
}
