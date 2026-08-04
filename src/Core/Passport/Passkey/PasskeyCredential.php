<?php

namespace WlSdk\Core\Passport\Passkey;

use WlSdk\WlSdkClient;

/**
 * Lists the signed-in user's registered passkey credentials.
 */
class PasskeyCredential
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Lists the signed-in user's registered passkey credentials.
     *
     * Returns each credential's own metadata (label, device type, backup state, timestamps) for the
     * account-settings
     * management. Does not reveal the raw credential ID or public key.
     *
     * @return PasskeyCredentialGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PasskeyCredentialGetRequest $request): PasskeyCredentialGetResponse
    {
        return new PasskeyCredentialGetResponse($this->client->request('/Core/Passport/Passkey/PasskeyCredential.json', $request->params(), 'GET'));
    }

    /**
     * Revokes one of the signed-in user's passkey credentials.
     *
     * Marks the credential as revoked rather than deleting the row, so its immutable identity data
     * remains available for audit purposes. Only a credential owned by the signed-in user can be
     * revoked - specifying another user's credential key has no effect.
     *
     * @return PasskeyCredentialDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(PasskeyCredentialDeleteRequest $request): PasskeyCredentialDeleteResponse
    {
        return new PasskeyCredentialDeleteResponse($this->client->request('/Core/Passport/Passkey/PasskeyCredential.json', $request->params(), 'DELETE'));
    }
}
