<?php

namespace WlSdk\Core\Passport\Login\Enter;

use WlSdk\WlSdkClient;

/**
 * Signs the user in using their login and hashed password.
 */
class Enter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Signs the user in using their login and hashed password.
     *
     * Accepts the user login, a password hash derived using the notepad obtained from
     * [NotepadApi](/Core/Passport/Login/Enter/Notepad.json),
     * and an optional remember preference. Validates credentials, enforces CAPTCHA when too many failed
     * attempts have occurred, starts a session for the user, and returns a redirect URL if applicable.
     *
     * @return EnterPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EnterPostRequest $request): EnterPostResponse
    {
        return new EnterPostResponse($this->client->request('/Core/Passport/Login/Enter/Enter.json', $request->params(), 'POST'));
    }
}
