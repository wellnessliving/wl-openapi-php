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
     * Returns list of staff that can provide selected appointment. Each staff data contains list of dates from
     * selected period when appointment can be booked. Each date contains list of available appointment start
     * times.
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
