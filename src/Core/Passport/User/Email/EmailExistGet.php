<?php
namespace WlSdk\Core\Passport\User\Email;

use WlSdk\WlSdkClient;

/**
 * Checks if email address exists.
 */
class EmailExistGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if email address exists.
     *
     * Used in registration and "forgot password" flows to give immediate feedback before the user submits
     * the full form. Returns `true` if a user account with the given email already exists, so the frontend
     * can prompt to sign in instead of registering.
     *
     * @return EmailExistGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EmailExistGetRequest $request): EmailExistGetResponse
    {
        return new EmailExistGetResponse($this->client->request('/Core/Passport/User/Email/EmailExist.json', $request->params(), 'GET'));
    }
}
