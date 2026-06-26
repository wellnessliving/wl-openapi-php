<?php

namespace WlSdk\Core\Push;

use WlSdk\WlSdkClient;

/**
 * Adds new device ID for push notifications.
 * Does nothing if user `uid` already has devise ID `s_id`.
 */
class Push
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds new device ID for push notifications.
Does nothing if user `uid` already has devise ID `s_id`.
     *
     * @return PushPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PushPostRequest $request): PushPostResponse
    {
        return new PushPostResponse($this->client->request('/Core/Push/Push.json', $request->params(), 'POST'));
    }
}
