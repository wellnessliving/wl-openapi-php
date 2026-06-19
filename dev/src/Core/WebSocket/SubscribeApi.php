<?php
namespace WlSdk\Core\WebSocket;

use WlSdk\WlSdkClient;

/**
 * Checks whether a listener can subscribe to specified channel.
 * Subscribes in a case of positive result.
 */
class SubscribeApi
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
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_key = null;

    /**
     * Channel controller CID.
     *
     * @var int|null
     */
    public ?int $cid_channel = null;

    /**
     * Subscriber password.
     *
     * @var string|null
     */
    public ?string $s_password = null;

    /**
     * Request token.

This token is only used for asynchronous functions, and identifies a specific request.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether a listener can subscribe to specified channel.
Subscribes in a case of positive result.
     *
     * Called by the WebSocket client immediately after a connection is established, to register interest in
     * a specific channel (identified by CID and key fields). If the current user is not permitted to receive
     * events on that channel, the subscription is rejected. On success, any messages already queued for the
     * channel are returned so the client does not miss events that arrived before the subscription was set up.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_message_broadcast: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Core/WebSocket/Subscribe.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_key' => $this->a_key,
            'cid_channel' => $this->cid_channel,
            's_password' => $this->s_password,
            's_token' => $this->s_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
