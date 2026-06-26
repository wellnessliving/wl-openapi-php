<?php

namespace WlSdk\Wl\Tuition;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Tuition/TuitionListByEvent.json
 */
class TuitionListByEvent
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Tuition/TuitionListByEvent.json.
     *
     * @return TuitionListByEventGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TuitionListByEventGetRequest $request): TuitionListByEventGetResponse
    {
        return new TuitionListByEventGetResponse($this->client->request('/Wl/Tuition/TuitionListByEvent.json', $request->params(), 'GET'));
    }
}
