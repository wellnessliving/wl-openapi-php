<?php

namespace WlSdk\Wl\Appointment\Book\Service;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about services in the current service category.
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
     * Retrieves information about services in the current service category.
     *
     * Returns all services available for booking at the given location, optionally filtered by service
     *  category, book now tab, and client. Each service entry includes title, description, image, pricing,
     *  duration, staff availability, and age restriction details. Supports both frontend and backend modes.
     *
     * @deprecated New version {@link Wl\Appointment\Book\Service\ServiceList52Api} should be used instead.
     *
     * @return ServiceListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceListGetRequest $request): ServiceListGetResponse
    {
        return new ServiceListGetResponse($this->client->request('/Wl/Appointment/Book/Service/ServiceList.json', $request->params(), 'GET'));
    }
}
