<?php

namespace WlSdk\Wl\Zoom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zoom/ZoomMeetingEnd.json
 */
class ZoomMeetingEnd
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Zoom/ZoomMeetingEnd.json.
     *
     * @return ZoomMeetingEndPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ZoomMeetingEndPostRequest $request): ZoomMeetingEndPostResponse
    {
        return new ZoomMeetingEndPostResponse($this->client->request('/Wl/Zoom/ZoomMeetingEnd.json', $request->params(), 'POST'));
    }
}
