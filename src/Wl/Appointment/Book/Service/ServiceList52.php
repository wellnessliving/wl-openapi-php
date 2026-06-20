<?php

namespace WlSdk\Wl\Appointment\Book\Service;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about services in the current service category.
 */
class ServiceList52
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
     * @return ServiceList52GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceList52GetRequest $request): ServiceList52GetResponse
    {
        return new ServiceList52GetResponse($this->client->request('/Wl/Appointment/Book/Service/ServiceList52.json', $request->params(), 'GET'));
    }
}
