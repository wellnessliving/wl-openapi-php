<?php
namespace WlSdk\Wl\Google\Login;

use WlSdk\WlSdkClient;

/**
 * Performs Google authorization within the context of the specified business.
 */
class GoogleLogin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs Google authorization within the context of the specified business.
     *
     * Validates that the given business is active, sets it as the current frontend context, and then
     * delegates to the parent Google login flow to authenticate the user.
     *
     * @return GoogleLoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(GoogleLoginPostRequest $request): GoogleLoginPostResponse
    {
        return new GoogleLoginPostResponse($this->client->request('/Wl/Google/Login/GoogleLogin.json', $request->params(), 'POST'));
    }
}
