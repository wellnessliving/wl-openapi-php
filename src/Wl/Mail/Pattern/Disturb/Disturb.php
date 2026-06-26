<?php

namespace WlSdk\Wl\Mail\Pattern\Disturb;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Mail/Pattern/Disturb/Disturb.json
 */
class Disturb
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Mail/Pattern/Disturb/Disturb.json.
     *
     * @return DisturbGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DisturbGetRequest $request): DisturbGetResponse
    {
        return new DisturbGetResponse($this->client->request('/Wl/Mail/Pattern/Disturb/Disturb.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Mail/Pattern/Disturb/Disturb.json.
     *
     * @return DisturbPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DisturbPostRequest $request): DisturbPostResponse
    {
        return new DisturbPostResponse($this->client->request('/Wl/Mail/Pattern/Disturb/Disturb.json', $request->params(), 'POST'));
    }
}
