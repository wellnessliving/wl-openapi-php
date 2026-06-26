<?php

namespace WlSdk\Wl\Appointment\Mark;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Appointment/Mark/Mark.json
 */
class Mark
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Appointment/Mark/Mark.json.
     *
     * @return MarkPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MarkPostRequest $request): MarkPostResponse
    {
        return new MarkPostResponse($this->client->request('/Wl/Appointment/Mark/Mark.json', $request->params(), 'POST'));
    }
}
