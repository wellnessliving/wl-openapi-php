<?php
namespace WlSdk\Thoth\WlPay\Address;

use WlSdk\WlSdkClient;

/**
 * Returns default payment address data that is retrieved from user profile.
 */
class ProfileApi
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
     * The business key number used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user whose data should be retrieved.
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
     * Returns default payment address data that is retrieved from user profile.
     *
     * @return array Parsed JSON response data.
     *   - string k_geo_country: The country key.

This will be `null` if not set yet.
     *   - string k_geo_region: The region ID.

This will be `null` if not set yet.
     *   - string s_city: The name of the city in the address.

This will be `null` if not set yet.
     *   - string s_name: The client name as listed in their address.

This will be `null` if not set yet.
     *   - string s_phone: The client phone number.

This will be `null` if not set yet.
     *   - string s_postal: The client postal or zip code.

This will be `null` if not set yet.
     *   - string s_street1: The first line of the client address.

This will be `null` if not set yet.
     *   - string s_street2: The second line of the client address.

This will be `null` if not set yet.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Thoth/WlPay/Address/Profile.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
