<?php
namespace WlSdk\Wl\Microsoft\Login;

use WlSdk\WlSdkClient;

/**
 * Authenticates a user via Microsoft OAuth for the specified business.
 */
class MicrosoftLoginPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Authenticates a user via Microsoft OAuth for the specified business.
     *
     * Validates the business key, sets it as the current frontend business context, and then delegates to the
     * parent Microsoft OAuth flow to complete sign-in.
     *
     * @return MicrosoftLoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MicrosoftLoginPostRequest $request): MicrosoftLoginPostResponse
    {
        return new MicrosoftLoginPostResponse($this->client->request('/Wl/Microsoft/Login/MicrosoftLogin.json', $request->params(), 'POST'));
    }
}
