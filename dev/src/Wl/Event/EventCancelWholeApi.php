<?php
namespace WlSdk\Wl\Event;

use WlSdk\WlSdkClient;

/**
 * Cancels book of event `k_class`.
 */
class EventCancelWholeApi
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
     * Key of the business in which the class resides.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * An event key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * A user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Cancels book of event `k_class`.
     *
     * Used when a client wants to drop out of a multi-session event entirely. Cancels all remaining
     * upcoming sessions at once, including any waitlisted spots, without requiring the client to cancel
     * each session individually.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Event/EventCancelWhole.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
