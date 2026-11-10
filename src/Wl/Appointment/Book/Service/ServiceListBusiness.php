<?php

namespace WlSdk\Wl\Appointment\Book\Service;

use WlSdk\WlSdkClient;

/**
 * Retrieves the full list of appointment services and categories for a business.
 */
class ServiceListBusiness
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves the full list of appointment services and categories for a business.
     *
     * Returns all active appointment services and their categories across every location of the business.
     * Each service and category includes an array of location keys where it is available.
     * All active services are returned: unlike the location-scoped list, the result is not filtered by class tab
     * or by online bookability, and removed locations are skipped.
     * The caller must be a staff member or admin of the business.
     *
     * @return ServiceListBusinessGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceListBusinessGetRequest $request): ServiceListBusinessGetResponse
    {
        return new ServiceListBusinessGetResponse($this->client->request('/Wl/Appointment/Book/Service/ServiceListBusiness.json', $request->params(), 'GET'));
    }
}
