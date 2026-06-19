<?php
namespace WlSdk\Core\Request\Api;

use WlSdk\WlSdkClient;

/**
 * Gets a secret key for signing.
 */
class KeySecretApi
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
     * The CSRF code from the client side.
     *
     * @var string|null
     */
    public ?string $s_csrf = null;

    /**
     * The session key.
     *
     * @var string|null
     */
    public ?string $s_key_session = null;

    /**
     * Alias of `url_origin`.
     *
     * @var string|null
     */
    public ?string $url_domain = null;

    /**
     * Origin for client requests.
     *
     * @var string|null
     */
    public ?string $url_origin = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a secret key for signing.
     *
     * Accepts a CSRF code, a session key, and the client origin URL, validates the session key against
     * the current application, and returns a secret key that the client uses to sign subsequent CORS requests.
     * This endpoint must not be called directly from a browser.
     *
     * @return array Parsed JSON response data.
     *   - string s_key_secret: The secret key for the request signing.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Request/Api/KeySecret.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            's_csrf' => $this->s_csrf,
            's_key_session' => $this->s_key_session,
            'url_domain' => $this->url_domain,
            'url_origin' => $this->url_origin,
            ],
            static fn($v) => $v !== null
        );
    }
}
