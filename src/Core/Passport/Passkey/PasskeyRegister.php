<?php

namespace WlSdk\Core\Passport\Passkey;

use WlSdk\WlSdkClient;

/**
 * Starts the registration ceremony.
 */
class PasskeyRegister
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Starts the registration ceremony.
     *
     * Issues a PublicKeyCredentialCreationOptions challenge for `navigator.credentials.create()`,
     * scoped to the signed-in user and excluding their already-registered active credentials so the
     * same authenticator cannot register a duplicate one.
     * The options are also stashed in session so `post()` can verify the same
     * challenge when finishing the ceremony.</i>
     *
     * @return PasskeyRegisterGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PasskeyRegisterGetRequest $request): PasskeyRegisterGetResponse
    {
        return new PasskeyRegisterGetResponse($this->client->request('/Core/Passport/Passkey/PasskeyRegister.json', $request->params(), 'GET'));
    }

    /**
     * Finishes the registration ceremony.
     *
     * Verifies the attestation response against the challenge issued by
     * `get()`, then stores the new credential under the signed-in user.
     * Fails if the ceremony was never started or has expired, or if the response does not match the
     * expected origin, `rpId`, or challenge.
     *
     * @return PasskeyRegisterPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PasskeyRegisterPostRequest $request): PasskeyRegisterPostResponse
    {
        return new PasskeyRegisterPostResponse($this->client->request('/Core/Passport/Passkey/PasskeyRegister.json', $request->params(), 'POST'));
    }
}
