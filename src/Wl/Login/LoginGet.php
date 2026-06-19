<?php
namespace WlSdk\Wl\Login;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user.
 */
class LoginGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about user.
     *
     * Returns name, gender, photo URL, email, and staff details for the specified user within the given business.
     * Public staff information is returned even without profile access; full client details require access to the
     * user's profile.
     *
     * @return LoginGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginGetRequest $request): LoginGetResponse
    {
        return new LoginGetResponse($this->client->request('/Wl/Login/Login.json', $request->params(), 'GET'));
    }
}
