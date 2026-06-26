<?php

namespace WlSdk\Wl\Profile\Password\Reset;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Profile/Password/Reset/PasswordReset.json
 */
class PasswordReset
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Profile/Password/Reset/PasswordReset.json.
     *
     * @return PasswordResetPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PasswordResetPostRequest $request): PasswordResetPostResponse
    {
        return new PasswordResetPostResponse($this->client->request('/Wl/Profile/Password/Reset/PasswordReset.json', $request->params(), 'POST'));
    }
}
