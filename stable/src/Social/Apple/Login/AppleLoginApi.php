<?php
namespace WlSdk\Social\Apple\Login;

use WlSdk\WlSdkClient;

/**
 * Signs user in with Apple.
 */
class AppleLoginApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

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
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Social/Apple/Login/AppleLogin.json', $this->params(), 'POST');
    }

    /**
     * Removes the association between a website client and the Apple account.
Invalidates the tokens and associated client authorizations.
     *
     * Requires the user to be signed in. Accepts the application ID, retrieves the Apple sign-in certificate
     * for that application, and unlinks the Apple account from the current user.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Social/Apple/Login/AppleLogin.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_application' => $this->text_application,
            'text_authorization' => $this->text_authorization,
            'text_name_first' => $this->text_name_first,
            'text_name_last' => $this->text_name_last,
            ],
            static fn($v) => $v !== null
        );
    }
}
