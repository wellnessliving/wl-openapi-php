<?php
namespace WlSdk\Social\Apple\Login;

use WlSdk\WlSdkClient;

/**
 * Signs user in with Apple.
 */
class AppleLoginApi
{
    /**
     * The application ID.
     *
     * @var string|null
     */
    public ?string $text_application = null;

    /**
     * The authorization code.
     *
     * @var string|null
     */
    public ?string $text_authorization = null;

    /**
     * User's first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * User's last name.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Signs user in with Apple.
     *
     * Accepts the application ID, the Apple authorization code, and optional first and last name values.
     * If the user is already signed in, binds the Apple account to their existing account; otherwise,
     * signs them in or creates a new account using the Apple identity.
     *
     * @return AppleLoginApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): AppleLoginApiPostResponse
    {
        return new AppleLoginApiPostResponse($this->client->request('/Social/Apple/Login/AppleLogin.json', $this->params(), 'POST'));
    }

    /**
     * Removes the association between a website client and the Apple account.
Invalidates the tokens and associated client authorizations.
     *
     * Requires the user to be signed in. Accepts the application ID, retrieves the Apple sign-in certificate
     * for that application, and unlinks the Apple account from the current user.
     *
     * @return AppleLoginApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): AppleLoginApiDeleteResponse
    {
        return new AppleLoginApiDeleteResponse($this->client->request('/Social/Apple/Login/AppleLogin.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'text_application' => $this->text_application,
            'text_authorization' => $this->text_authorization,
            'text_name_first' => $this->text_name_first,
            'text_name_last' => $this->text_name_last,
            ],
            static fn($v) => $v !== null
        );
    }
}
