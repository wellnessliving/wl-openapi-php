<?php
namespace WlSdk\Wl\Business\Config;

use WlSdk\WlSdkClient;

/**
 * Gets information about a business config.
 */
class BusinessConfigApi
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
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about a business config.
     *
     * Used by the booking widget and checkout flow to know the rules governing client interactions: which
     * family member relations are allowed, whether clients or staff must select a location at checkout,
     * what cancellation penalties apply, and whether white-label mode is active.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_business_policy: No description.
     *   - array[] a_penalty: No description.
     *   - bool is_location_client_select: Whether client must select a location at checkout.
     *   - bool is_location_select: Determines whether staff members should select a location at checkout.

If `true`, staff members should select a location at checkout. Otherwise, this will be `false`.
     *   - bool is_white_label: Determines whether the business has white label setting enabled in the admin settings.

If `true`, admin settings are enabled. Otherwise, this will be `false`.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Config/BusinessConfig.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
