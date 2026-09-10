<?php

namespace WlSdk\Wl\Virtual;

use WlSdk\WlSdkClient;

/**
 * Returns the list of currently active virtual meetings.
 */
class MeetingList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of currently active virtual meetings.
     *
     * Loads the Zoom users configured for the business and matches them against in-progress
     *  appointment or class virtual sessions, returning staff, client, and timing details for
     *  each active meeting. Also reports the business's FitLIVE subscription status, licensed
     *  seat count, and whether additional licenses can be purchased.
     *
     * @return MeetingListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MeetingListGetRequest $request): MeetingListGetResponse
    {
        return new MeetingListGetResponse($this->client->request('/Wl/Virtual/MeetingList.json', $request->params(), 'GET'));
    }
}
