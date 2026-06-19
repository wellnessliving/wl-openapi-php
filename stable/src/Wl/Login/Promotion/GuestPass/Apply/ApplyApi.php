<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Apply;

use WlSdk\WlSdkClient;

/**
 * Applies the guest pass of the specified login promotion to the attendee's visit.
 */
class ApplyApi
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
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login promotion key of the host member's class membership whose guest pass
balance will be used.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Visit key of the attendee to whom the guest pass is applied.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Applies the guest pass of the specified login promotion to the attendee's visit.
     *
     * If the visit is already paid (with a regular session pass or an existing guest pass),
     * the previous payment is unwound before the new guest pass is applied.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Login/Promotion/GuestPass/Apply/Apply.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
