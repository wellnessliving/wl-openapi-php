<?php

namespace WlSdk\Wl\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Gets the public key material for OTP registration JWT verification.
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
     * Gets the public key material for OTP registration JWT verification.
     *
     * The public key is used to verify a JWT token.
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
