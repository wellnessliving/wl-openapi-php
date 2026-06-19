<?php
namespace WlSdk\Wl\Login;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about a list of users.
 * This is done via "post" method because only "post" allows large requests.
 */
class LoginPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about a list of users.
This is done via "post" method because only "post" allows large requests.
     *
     * Accepts a JSON-encoded array of user keys, validates each one, resolves staff and client roles, and returns
     * name, gender, photo URL, email, and staff details for every user in the list, respecting per-user profile
     * access
     * rules.
     *
     * @return LoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LoginPostRequest $request): LoginPostResponse
    {
        return new LoginPostResponse($this->client->request('/Wl/Login/Login.json', $request->params(), 'POST'));
    }
}
