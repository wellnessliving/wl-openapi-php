<?php

namespace WlSdk\Wl\Profile\Waiver;

use WlSdk\WlSdkClient;

/**
 * Gets list of subscribed waivers.
 */
class Waiver
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of subscribed waivers.
     *
     * @return WaiverGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WaiverGetRequest $request): WaiverGetResponse
    {
        return new WaiverGetResponse($this->client->request('/Wl/Profile/Waiver/Waiver.json', $request->params(), 'GET'));
    }
}
