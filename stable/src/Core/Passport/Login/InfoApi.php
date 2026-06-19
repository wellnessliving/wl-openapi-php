<?php
namespace WlSdk\Core\Passport\Login;

use WlSdk\WlSdkClient;

/**
 * Returns information about user that is currently signed in.
 */
class InfoApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about user that is currently signed in.
     *
     * Used to bootstrap the login widget: determines whether a session is active and provides the URLs needed
     * to redirect an unauthenticated visitor to the password reset or registration flows without hard-coding
     * those URLs on the frontend.
     *
     * @return array Parsed JSON response data.
     *   - string uid: The current user key.

This will be `null` if the user isn't signed in.
     *   - string url_password_change: A URL that a user can visit to reset their password.
     *   - string url_register: The URL to the registration page.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Passport/Login/Info.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            ],
            static fn($v) => $v !== null
        );
    }
}
