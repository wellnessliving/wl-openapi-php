<?php

namespace WlSdk\Wl\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Returns public key material for OTP registration JWT verification.
 */
class RegisterOtpJwtPublicKey
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns public key material for OTP registration JWT verification.
     *
     * @return RegisterOtpJwtPublicKeyGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RegisterOtpJwtPublicKeyGetRequest $request): RegisterOtpJwtPublicKeyGetResponse
    {
        return new RegisterOtpJwtPublicKeyGetResponse($this->client->request('/Wl/Passport/Login/Register/RegisterOtpJwtPublicKey.json', $request->params(), 'GET'));
    }
}
