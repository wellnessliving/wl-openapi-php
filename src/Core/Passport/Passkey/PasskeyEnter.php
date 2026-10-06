<?php

namespace WlSdk\Core\Passport\Passkey;

use WlSdk\WlSdkClient;

/**
 * Starts the authentication ceremony.
 */
class PasskeyEnter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Starts the authentication ceremony.
     *
     * Issues an authentication challenge with an empty `allowCredentials` list, so the browser or OS
     * surfaces a picker of every passkey registered for this `rpId` without the caller identifying a
     * user first.
     * The options are also stashed in session so `post()` can verify the same challenge
     * when finishing the ceremony.
     *
     * @return PasskeyEnterGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PasskeyEnterGetRequest $request): PasskeyEnterGetResponse
    {
        return new PasskeyEnterGetResponse($this->client->request('/Core/Passport/Passkey/PasskeyEnter.json', $request->params(), 'GET'));
    }

    /**
     * Finishes the authentication ceremony.
     *
     * Looks up the credential by the ID carried in the assertion, verifies the assertion against it
     * and the challenge issued by `get()`, then signs the credential's owner
     * in the same way a successful password login would. Fails if the caller is already signed in,
     * the credential is unknown or revoked, or the assertion does not verify.
     *
     * @return PasskeyEnterPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PasskeyEnterPostRequest $request): PasskeyEnterPostResponse
    {
        return new PasskeyEnterPostResponse($this->client->request('/Core/Passport/Passkey/PasskeyEnter.json', $request->params(), 'POST'));
    }
}
