<?php
namespace WlSdk\Wl\Reception\Roster\Design;

use WlSdk\WlSdkClient;

/**
 * Returns configuration for the Attendance Kiosk.
 */
class ReceptionRosterDesignApi
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns configuration for the Attendance Kiosk.
     *
     * Returns kiosk display settings including custom image, logo, direction mode, background color,
     * and business name for the specified business.
     *
     * @return ReceptionRosterDesignApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ReceptionRosterDesignApiGetResponse
    {
        return new ReceptionRosterDesignApiGetResponse($this->client->request('/Wl/Reception/Roster/Design/ReceptionRosterDesign.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
