<?php
namespace WlSdk\Core\Request\Token;

use WlSdk\WlSdkClient;

/**
 * Gets new pin code.
 */
class TokenPinApi
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
     * The ID to use to send a security code via a push notification.
     *
     * @var string|null
     */
    public ?string $text_push = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets new pin code.
     *
     * First step of push-notification-based security token generation. Issues a short-lived PIN code
     * linked to a push recipient, which is then sent to the user's device. The client must present
     * this PIN before its expiry to receive the final security token.
     *
     * @return array Parsed JSON response data.
     *   - string dtu_expire: The expiration date/time of the PIN code.
     *   - string text_pin: The PIN code.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Request/Token/TokenPin.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_push' => $this->text_push,
            ],
            static fn($v) => $v !== null
        );
    }
}
