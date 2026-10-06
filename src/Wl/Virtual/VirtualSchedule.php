<?php

namespace WlSdk\Wl\Virtual;

use WlSdk\WlSdkClient;

/**
 * Schedules or joins a virtual meeting for an appointment or a class session.
 */
class VirtualSchedule
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Schedules or joins a virtual meeting for an appointment or a class session.
     *
     * Validates that the requested appointment or class period exists, has not already passed,
     *  and that the current user is allowed to view or attend it. When the session start is
     *  within the create-ahead window, creates the virtual meeting (or reuses one already created
     *  by a concurrent request) and returns the redirect URL to join it. Otherwise returns the
     *  number of seconds to wait before the meeting can be created.
     *
     * @return VirtualSchedulePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(VirtualSchedulePostRequest $request): VirtualSchedulePostResponse
    {
        return new VirtualSchedulePostResponse($this->client->request('/Wl/Virtual/VirtualSchedule.json', $request->params(), 'POST'));
    }
}
