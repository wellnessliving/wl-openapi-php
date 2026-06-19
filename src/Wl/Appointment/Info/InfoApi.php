<?php
namespace WlSdk\Wl\Appointment\Info;

use WlSdk\WlSdkClient;

/**
 * Gets information about appointment.
 */
class InfoApi
{
    /**
     * Class identifier to get information for.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about appointment.
     *
     * Returns detailed information about the specified appointment, including service details, staff member,
     *  date and time in the location's timezone, booking status, client information, and any associated
     *  assets or add-ons. Access is validated against the current user's permissions.
     *
     * @return InfoApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): InfoApiGetResponse
    {
        return new InfoApiGetResponse($this->client->request('/Wl/Appointment/Info/Info.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_appointment' => $this->k_appointment,
            ],
            static fn($v) => $v !== null
        );
    }
}
