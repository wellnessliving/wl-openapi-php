<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of available appointment booking schedule.
 */
class ServiceAvailability
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of available appointment booking schedule.
     *
     * @return ServiceAvailabilityGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceAvailabilityGetRequest $request): ServiceAvailabilityGetResponse
    {
        return new ServiceAvailabilityGetResponse($this->client->request('/Wl/Appointment/Book/Schedule/ServiceAvailability.json', $request->params(), 'GET'));
    }
}
