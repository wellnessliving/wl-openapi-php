<?php

namespace WlSdk\Wl\Timezone;

use WlSdk\WlSdkClient;

/**
 * Gets current date time in the timezone.
 */
class TimezoneCurrentTime
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets current date time in the timezone.
     *
     * @return TimezoneCurrentTimeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TimezoneCurrentTimeGetRequest $request): TimezoneCurrentTimeGetResponse
    {
        return new TimezoneCurrentTimeGetResponse($this->client->request('/Wl/Timezone/TimezoneCurrentTime.json', $request->params(), 'GET'));
    }
}
