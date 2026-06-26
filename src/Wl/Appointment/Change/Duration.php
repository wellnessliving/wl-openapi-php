<?php

namespace WlSdk\Wl\Appointment\Change;

use WlSdk\WlSdkClient;

/**
 * Change appointment duration.
 */
class Duration
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Change appointment duration.
     *
     * @return DurationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DurationPostRequest $request): DurationPostResponse
    {
        return new DurationPostResponse($this->client->request('/Wl/Appointment/Change/Duration.json', $request->params(), 'POST'));
    }
}
