<?php

namespace WlSdk\Wl\Service;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Service/ServiceSort.json
 */
class ServiceSort
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Service/ServiceSort.json.
     *
     * @return ServiceSortPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ServiceSortPostRequest $request): ServiceSortPostResponse
    {
        return new ServiceSortPostResponse($this->client->request('/Wl/Service/ServiceSort.json', $request->params(), 'POST'));
    }
}
