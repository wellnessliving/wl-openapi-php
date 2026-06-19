<?php
namespace WlSdk\Wl\Appointment\Recent;

use WlSdk\WlSdkClient;

/**
 * Gets list of client's last booked services.
 */
class RecentService
{
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
     * @return RecentServiceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RecentServiceGetRequest $request): RecentServiceGetResponse
    {
        return new RecentServiceGetResponse($this->client->request('/Wl/Appointment/Recent/RecentService.json', $request->params(), 'GET'));
    }
}
