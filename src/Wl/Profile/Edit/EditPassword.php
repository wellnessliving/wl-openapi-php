<?php

namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Saves new password for user.
 */
class EditPassword
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves new password for user.
     *
     * Changes the user's password after verifying the current one, enforcing complexity and
     *  length rules, and sends a password-change notification email. The old password check can
     *  be skipped by staff with the appropriate access level.
     *
     * @return EditPasswordPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditPasswordPostRequest $request): EditPasswordPostResponse
    {
        return new EditPasswordPostResponse($this->client->request('/Wl/Profile/Edit/EditPassword.json', $request->params(), 'POST'));
    }
}
