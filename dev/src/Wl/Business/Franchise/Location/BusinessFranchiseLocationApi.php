<?php
namespace WlSdk\Wl\Business\Franchise\Location;

use WlSdk\WlSdkClient;

/**
 * Returns country, region, state, city and location lists of the franchisor.
 */
class BusinessFranchiseLocationApi
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
     * Determines which locations should be returned.

One of the [BusinessFranchiseLocationSid](#/components/schemas/Wl.Business.Franchise.Location.BusinessFranchiseLocationSid) constants.

If `null`, [BusinessFranchiseLocationSid::ALL](#/components/schemas/Wl.Business.Franchise.Location.BusinessFranchiseLocationSid) is used.
     *
     * @var int|null
     */
    public ?int $id_business_franchise_location = null;

    /**
     * Determines whether to include churned/removed locations.

If `true`, all locations are listed (regardless of their status).
     *
     * @var bool|null
     */
    public ?bool $is_include_churn = null;

    /**
     * Determines whether to include locations marked to not be displayed on franchisor website.

If `true`, all locations are listed (regardless of this setting).
     *
     * @var bool|null
     */
    public ?bool $is_include_non_api = null;

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
     * Returns country, region, state, city and location lists of the franchisor.
     *
     * Used on the franchisor's website location finder to display all franchisee locations on a map or
     * list, grouped by country, state, and city. Results can be filtered to only locations assigned to a
     * specific franchise region or to exclude churned locations. Results are cached for 3 minutes.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_city_list: No description.
     *   - array[] a_country_list: No description.
     *   - array[] a_location_list: No description.
     *   - array[] a_region_list: No description.
     *   - array[] a_state_list: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Franchise/Location/BusinessFranchiseLocation.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_business_franchise_location' => $this->id_business_franchise_location,
            'is_include_churn' => $this->is_include_churn,
            'is_include_non_api' => $this->is_include_non_api,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
