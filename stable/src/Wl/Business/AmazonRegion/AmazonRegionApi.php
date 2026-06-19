<?php
namespace WlSdk\Wl\Business\AmazonRegion;

use WlSdk\WlSdkClient;

/**
 * Returns the Amazon region ID for each of the requested business keys.
 */
class AmazonRegionApi
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
     * List of business key.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the Amazon region ID for each of the requested business keys.
     *
     * Used to determine which data center stores the data for a given set of businesses. Knowing the region
     * is required before routing API calls across data centers. Returns `0` for businesses whose region
     * is not set. All requested business keys must exist.
     *
     * @return array Parsed JSON response data.
     *   - int[] a_business_region: List of region IDs for `a_business`.

Key - is business key.
Value - is region ID. One of [AmazonRegionSid](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) constants.
  `0` if this business is from an unknown region.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/AmazonRegion/AmazonRegion.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_business' => $this->a_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
