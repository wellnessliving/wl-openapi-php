<?php
namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * Performs check-in for the given user and returns the confirmation HTML and data.
 */
class ReceptionSchedulePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs check-in for the given user and returns the confirmation HTML and data.
     *
     * Books or checks the user into the specified class period or appointment, then returns confirmation HTML
     * and structured data including payment info, assigned assets, and visit counts.
     *
     * @return ReceptionSchedulePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReceptionSchedulePostRequest $request): ReceptionSchedulePostResponse
    {
        return new ReceptionSchedulePostResponse($this->client->request('/Wl/Reception/Application/ReceptionSchedule.json', $request->params(), 'POST'));
    }
}
