<?php
namespace WlSdk\Wl\Appointment\Book\Service;

use WlSdk\WlSdkClient;

/**
 * Checks whether a service can be booked by the given client at the given date, throwing an exception if booking is
 * restricted.
 */
class ServiceCheckApi
{
    /**
     * Date of booking in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

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
     * @return ServiceCheckApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ServiceCheckApiGetResponse
    {
        return new ServiceCheckApiGetResponse($this->client->request('/Wl/Appointment/Book/Service/ServiceCheck.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
