<?php
namespace WlSdk\Wl\Login\Permission;

use WlSdk\WlSdkClient;

/**
 * Saves the auto-renew setting for a purchased promotion.
 */
class PermissionApi
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
     * The key of the purchased promotion.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * If `true`, the purchased promotion has been made auto-renewable. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_renew = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the auto-renew setting for a purchased promotion.
     *
     * Validates the purchased promotion, checks profile access, and sets the auto-renew flag to the value of
     * `is_renew`. Returns an error if the promotion does not support auto-renewal or if the client is a debtor.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Login/Permission/Permission.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_login_promotion' => $this->k_login_promotion,
            'is_renew' => $this->is_renew,
            ],
            static fn($v) => $v !== null
        );
    }
}
