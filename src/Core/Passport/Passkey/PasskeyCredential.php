<?php

namespace WlSdk\Core\Passport\Passkey;

use WlSdk\WlSdkClient;

/**
 * Lists the user's registered passkey credentials.
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
     * Lists the user's registered passkey credentials.
     *
     * Includes credentials revoked before revoking started to delete the row.
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
     * Renames one of the signed-in user's own passkey credentials.
     *
     * Saves the new name as it is entered, even if another passkey of the user has the same name, so no number is
     * added. A passkey of another user cannot be renamed, whatever the project configuration allows to manage. The
     * rename is not written to the sign-in log: the log has only the entries of adding and removing a passkey.
     *
     * @return PasskeyCredentialPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(PasskeyCredentialPutRequest $request): PasskeyCredentialPutResponse
    {
        return new PasskeyCredentialPutResponse($this->client->request('/Core/Passport/Passkey/PasskeyCredential.json', $request->params(), 'PUT'));
    }

    /**
     * Revokes one of the signed-in user's passkey credentials.
     *
     * Deletes the row of the credential. The audit of the removal is the entry of the sign-in log written by
     * `PassportPasskey::logWrite()`, not the row. A credential of another user can be revoked only
     * if {@link \WlSdk\Core\Passport\Passkey\PasskeyConfigAbstract} allows it.
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
