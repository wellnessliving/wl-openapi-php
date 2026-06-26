<?php

namespace WlSdk\Wl\Virtual\Meeting\NonIntegrated;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Virtual/Meeting/NonIntegrated/NonIntegratedMeetingEnd.json
 */
class NonIntegratedMeetingEnd
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Virtual/Meeting/NonIntegrated/NonIntegratedMeetingEnd.json.
     *
     * @return NonIntegratedMeetingEndPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NonIntegratedMeetingEndPostRequest $request): NonIntegratedMeetingEndPostResponse
    {
        return new NonIntegratedMeetingEndPostResponse($this->client->request('/Wl/Virtual/Meeting/NonIntegrated/NonIntegratedMeetingEnd.json', $request->params(), 'POST'));
    }
}
