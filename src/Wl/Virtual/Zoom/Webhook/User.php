<?php

namespace WlSdk\Wl\Virtual\Zoom\Webhook;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Virtual/Zoom/Webhook/User.json
 */
class User
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Virtual/Zoom/Webhook/User.json.
     *
     * @return UserPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UserPostRequest $request): UserPostResponse
    {
        return new UserPostResponse($this->client->request('/Wl/Virtual/Zoom/Webhook/User.json', $request->params(), 'POST'));
    }
}
