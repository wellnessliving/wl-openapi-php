<?php

namespace WlSdk\Wl\Virtual\Meeting\Zoom;

use WlSdk\WlSdkClient;

/**
 * Ends a virtual meeting.
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
     * Ends a virtual meeting.
     *
     * Validates the business and, for requests made over http, checks that the current user has
     *  access to it. Requires a meeting id, then delegates to the provider-specific `meetingEnd()`
     *  implementation for the cleanup that actually ends the meeting.
     *
     * @return ZoomMeetingEndPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ZoomMeetingEndPostRequest $request): ZoomMeetingEndPostResponse
    {
        return new ZoomMeetingEndPostResponse($this->client->request('/Wl/Virtual/Meeting/Zoom/ZoomMeetingEnd.json', $request->params(), 'POST'));
    }
}
