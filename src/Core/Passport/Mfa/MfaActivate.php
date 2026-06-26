<?php

namespace WlSdk\Core\Passport\Mfa;

use WlSdk\WlSdkClient;

/**
 * Activates an MFA device.
 */
class MfaActivate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Activates an MFA device.
     *
     * @return MfaActivatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MfaActivatePostRequest $request): MfaActivatePostResponse
    {
        return new MfaActivatePostResponse($this->client->request('/Core/Passport/Mfa/MfaActivate.json', $request->params(), 'POST'));
    }
}
