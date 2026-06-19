<?php
namespace WlSdk\Core\Passport\Login\Enter;

use WlSdk\WlSdkClient;

/**
 * Generates notepad for user sign in form.
 */
class NotepadApi
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
     * User login.

If specified, additional information about user may be returned such as datacenter of the user.

This value is only considered when [AmazonRegionSid::currentId()](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) is not empty,
and [AmazonRegionSid::isRegionFixed()](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) returns `false`.
In this case, regional cookie may be set, and the request may be forwarded internally to a different datacenter.

`null` if additional information is not needed.
     *
     * @var string|null
     */
    public ?string $s_login = null;

    /**
     * The session type to store the notepad in.

This will be an empty string for a temporary session. Otherwise, you can use `system` for a system session.
     *
     * @var string|null
     */
    public ?string $s_type = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Generates notepad for user sign in form.
     *
     * Generates a cryptographic nonce (one-time random string) and stores it in the session so that the
     * client can hash the user's password with it before sending it to
     * [EnterApi](/Core/Passport/Login/Enter/Enter.json). This prevents
     * replay attacks and avoids transmitting passwords in plain text.
     *
     * @return array Parsed JSON response data.
     *   - int id_region: ID of the datacenter which is a preferred datacenter for the user specified in
`s_login`.

One of [AmazonRegionSid](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) constants.

If ID of the datacenter returned in this property differs from the current datacenter, this means that this
API request was forwarded to the datacenter returned here, and the notepad was created there.
So that [EnterApi](/Core/Passport/Login/Enter/Enter.json) must always go to the datacenter specified in this property.

`null` if datacenter preference was not evaluated, or it is not known.
In this case, the notepad is created in datacenter where the API request was initially sent.
     *   - string s_hash: The hash type.
     *   - string s_notepad: The notepad value, which is used to hash the user's password.
The password length is `NONCE_LENGTH` characters.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Passport/Login/Enter/Notepad.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            's_login' => $this->s_login,
            's_type' => $this->s_type,
            ],
            static fn($v) => $v !== null
        );
    }
}
