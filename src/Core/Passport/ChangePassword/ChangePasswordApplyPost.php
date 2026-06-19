<?php
namespace WlSdk\Core\Passport\ChangePassword;

use WlSdk\WlSdkClient;

/**
 * Saves for user new password.
 */
class ChangePasswordApplyPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves for user new password.
     *
     * Accepts the login, email, verification code (from the reset password link), and the new password,
     * validates each against the stored state, and updates the user's password. If the user is not already
     * signed in, a new session is started for them.
     *
     * @return ChangePasswordApplyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ChangePasswordApplyPostRequest $request): ChangePasswordApplyPostResponse
    {
        return new ChangePasswordApplyPostResponse($this->client->request('/Core/Passport/ChangePassword/ChangePasswordApply.json', $request->params(), 'POST'));
    }
}
