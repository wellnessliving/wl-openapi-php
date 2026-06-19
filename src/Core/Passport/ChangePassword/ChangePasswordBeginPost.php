<?php
namespace WlSdk\Core\Passport\ChangePassword;

use WlSdk\WlSdkClient;

/**
 * Sends to user "password recovery" mail.
 */
class ChangePasswordBeginPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends to user "password recovery" mail.
     *
     * Accepts the user's email address and an optional custom reset-page URL, validates the input,
     * optionally checks a CAPTCHA, and sends a password reset email containing a link the user can follow
     * to set a new password using
     * [ChangePasswordApplyApi](/Core/Passport/ChangePassword/ChangePasswordApply.json).
     *
     * @return ChangePasswordBeginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ChangePasswordBeginPostRequest $request): ChangePasswordBeginPostResponse
    {
        return new ChangePasswordBeginPostResponse($this->client->request('/Core/Passport/ChangePassword/ChangePasswordBegin.json', $request->params(), 'POST'));
    }
}
