<?php
namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * Returns the schedule and HTML for the Self Check-In Web App for the given user.
 */
class ReceptionScheduleGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the schedule and HTML for the Self Check-In Web App for the given user.
     *
     * Returns the rendered schedule HTML, a structured list of upcoming sessions, and a map of service type
     * HTML classes for the authenticated user at the given location.
     *
     * @return ReceptionScheduleGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReceptionScheduleGetRequest $request): ReceptionScheduleGetResponse
    {
        return new ReceptionScheduleGetResponse($this->client->request('/Wl/Reception/Application/ReceptionSchedule.json', $request->params(), 'GET'));
    }
}
