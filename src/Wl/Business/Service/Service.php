<?php

namespace WlSdk\Wl\Business\Service;

use WlSdk\WlSdkClient;

/**
 * Returns which services are available for the business.
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
     * Returns which services are available for the business.
     *
     * The gym visits (drop-ins) are reported as available when the business allows them.
     * The current user must be a staff member with access to the business.
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
