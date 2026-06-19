<?php
namespace WlSdk\Wl\Appointment\Recent;

use WlSdk\WlSdkClient;

/**
 * Gets list of client's last booked services.
 */
class RecentServiceApi
{
    /**
     * Count of last booked services to return. Default value is 5.
     *
     * @var int|null
     */
    public ?int $i_visit = null;

    /**
     * Type of service to return. One of [ServiceSid](#/components/schemas/Wl.Service.ServiceSid) constants.
     *
     * @var int|null
     */
    public ?int $id_service = null;

    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user.
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
     * Gets list of client's last booked services.
     *
     * Returns the most recently booked unique services for the given client at the given business,
     *  filtered by service type (appointment or bookable asset). Duplicate services are collapsed so
     *  only the most recent booking per service is included, up to `MAX_SERVICE_COUNT`.
     *
     * @return RecentServiceApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): RecentServiceApiGetResponse
    {
        return new RecentServiceApiGetResponse($this->client->request('/Wl/Appointment/Recent/RecentService.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'i_visit' => $this->i_visit,
            'id_service' => $this->id_service,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
