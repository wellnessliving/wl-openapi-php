<?php
namespace WlSdk\Core\Passport\User\Email;

use WlSdk\WlSdkClient;

/**
 * Checks if email address exists.
 */
class EmailExistApi
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
     * The email address.
     *
     * @var string|null
     */
    public ?string $text_email = null;

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
     * @return array Parsed JSON response data.
     *   - bool is_exist: Determines whether the email address exists.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Passport/User/Email/EmailExist.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_email' => $this->text_email,
            ],
            static fn($v) => $v !== null
        );
    }
}
