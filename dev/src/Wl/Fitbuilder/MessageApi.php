<?php
namespace WlSdk\Wl\Fitbuilder;

use WlSdk\WlSdkClient;

/**
 * Notifies messengers with new information.
 */
class MessageApi
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
     * Messenger channel key.
     *
     * @var string|null
     */
    public ?string $k_channel = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_data = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Notifies messengers with new information.
     *
     * Accepts a channel key and a data payload, then dispatches a notification to the Fitbuilder messenger channel
     * associated with that key. Requires the `notify` API privilege.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Fitbuilder/Message.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_channel' => $this->k_channel,
            'a_data' => $this->a_data,
            ],
            static fn($v) => $v !== null
        );
    }
}
