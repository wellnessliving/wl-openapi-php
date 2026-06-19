<?php
namespace WlSdk\Wl\Business\Select;

use WlSdk\WlSdkClient;

/**
 * Performs checks and generates a list of businesses according to a given configuration.
 */
class BusinessSelectApi
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
     * Configuration data used to determine the list of businesses returned. This array has the following keys:
     *
     * @var array[]|null
     */
    public ?array $a_config = null;

    /**
     * Business in which a list of business is requested.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User who is requesting the list of businesses.
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
     * Performs checks and generates a list of businesses according to a given configuration.
     *
     * Populates the business-select dropdown widget shown in the backend. Used wherever staff need to
     * switch between businesses they have access to. The returned structure drives the widget directly
     * and includes selection state, visibility flags, and display configuration.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_select: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Select/BusinessSelect.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_config' => $this->a_config,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
