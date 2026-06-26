<?php

namespace WlSdk\Wl\Virtual\Zoom\Webhook;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Virtual/Zoom/Webhook/MeetingEnd.json
 */
class MeetingEnd
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Virtual/Zoom/Webhook/MeetingEnd.json.
     *
     * @return MeetingEndPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MeetingEndPostRequest $request): MeetingEndPostResponse
    {
        return new MeetingEndPostResponse($this->client->request('/Wl/Virtual/Zoom/Webhook/MeetingEnd.json', $request->params(), 'POST'));
    }
}
