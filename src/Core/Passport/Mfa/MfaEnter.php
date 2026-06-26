<?php

namespace WlSdk\Core\Passport\Mfa;

use WlSdk\WlSdkClient;

/**
 * Checks the OTP code.
 */
class MfaEnter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks the OTP code.
     *
     * @return MfaEnterPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MfaEnterPostRequest $request): MfaEnterPostResponse
    {
        return new MfaEnterPostResponse($this->client->request('/Core/Passport/Mfa/MfaEnter.json', $request->params(), 'POST'));
    }
}
