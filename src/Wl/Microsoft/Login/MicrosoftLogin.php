<?php

namespace WlSdk\Wl\Microsoft\Login;

use WlSdk\WlSdkClient;

/**
 * Collects data for the Microsoft login button.
 */
class MicrosoftLogin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Collects data for the Microsoft login button.
     *
     * Called when rendering the "Sign in with Microsoft" button. Generates the OAuth 2.0 authorization URL
     * the button must link to. When a UID is provided, also reports whether that user already has a Microsoft
     * account linked, so the frontend can show "Link" or "Unlink" instead of the default sign-in label.
     *
     * @return MicrosoftLoginGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MicrosoftLoginGetRequest $request): MicrosoftLoginGetResponse
    {
        return new MicrosoftLoginGetResponse($this->client->request('/Wl/Microsoft/Login/MicrosoftLogin.json', $request->params(), 'GET'));
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

    /**
     * Removes the association between a website client and a Microsoft account.
     *
     * Accepts the user's UID, verifies that the caller is the account owner, and unlinks the Microsoft
     * account from the user's profile.
     *
     * @return MicrosoftLoginDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(MicrosoftLoginDeleteRequest $request): MicrosoftLoginDeleteResponse
    {
        return new MicrosoftLoginDeleteResponse($this->client->request('/Wl/Microsoft/Login/MicrosoftLogin.json', $request->params(), 'DELETE'));
    }
}
