<?php

namespace WlSdk\Wl\Appointment\Book\Asset\Service;

use WlSdk\WlSdkClient;

/**
 * Retrieves assets required for a service booking at the given date and time, including availability and busy status.
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
     * Retrieves assets required for a service booking at the given date and time, including availability and busy status.
     *
     * Returns the asset categories and individual assets linked to the service at the given location.
     *  Each asset includes its availability flag for the requested time slot. The response also includes
     *  {@link \WlSdk\Wl\Appointment\Book\Asset\Service\ServiceGetResponse::$a_resource_busy} with currently
     * reserved asset slots and a flag indicating
     *  whether the current user is allowed to book unavailable assets.
     *
     * @return ServiceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceGetRequest $request): ServiceGetResponse
    {
        return new ServiceGetResponse($this->client->request('/Wl/Appointment/Book/Asset/Service/Service.json', $request->params(), 'GET'));
    }
}
