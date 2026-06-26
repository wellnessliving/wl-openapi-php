<?php

namespace WlSdk\Wl\Virtual;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Virtual/MeetingList.json
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
     * Calls GET /Wl/Virtual/MeetingList.json.
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
