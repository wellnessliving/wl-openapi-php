<?php
namespace WlSdk\Wl\Appointment\Book\Service;

use WlSdk\WlSdkClient;

/**
 * Checks whether a service can be booked by the given client at the given date, throwing an exception if booking is
 * restricted.
 */
class ServiceCheck
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether a service can be booked by the given client at the given date, throwing an exception if booking is restricted.
     *
     * Validates the client's age against the service's age restrictions and checks the booking date
     *  against the service's booking window. Returns without data on success; throws exception with a descriptive
     * message when booking is not allowed.
     *
     * @return ServiceCheckGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceCheckGetRequest $request): ServiceCheckGetResponse
    {
        return new ServiceCheckGetResponse($this->client->request('/Wl/Appointment/Book/Service/ServiceCheck.json', $request->params(), 'GET'));
    }
}
