<?php

namespace WlSdk\Wl\Reception\Roster\Design;

use WlSdk\WlSdkClient;

/**
 * Returns configuration for the Attendance Kiosk.
 */
class ReceptionRosterDesign
{
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
     * @return ReceptionRosterDesignGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReceptionRosterDesignGetRequest $request): ReceptionRosterDesignGetResponse
    {
        return new ReceptionRosterDesignGetResponse($this->client->request('/Wl/Reception/Roster/Design/ReceptionRosterDesign.json', $request->params(), 'GET'));
    }
}
