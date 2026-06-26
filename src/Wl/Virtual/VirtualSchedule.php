<?php

namespace WlSdk\Wl\Virtual;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Virtual/VirtualSchedule.json
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
     * Calls POST /Wl/Virtual/VirtualSchedule.json.
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
