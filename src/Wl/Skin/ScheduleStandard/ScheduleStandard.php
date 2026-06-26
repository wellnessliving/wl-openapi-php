<?php

namespace WlSdk\Wl\Skin\ScheduleStandard;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Skin/ScheduleStandard/ScheduleStandard.json
 */
class ScheduleStandard
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Skin/ScheduleStandard/ScheduleStandard.json.
     *
     * @return ScheduleStandardGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleStandardGetRequest $request): ScheduleStandardGetResponse
    {
        return new ScheduleStandardGetResponse($this->client->request('/Wl/Skin/ScheduleStandard/ScheduleStandard.json', $request->params(), 'GET'));
    }
}
