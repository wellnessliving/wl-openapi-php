<?php
namespace WlSdk\Wl\Login\Member\DynamicId;

use WlSdk\WlSdkClient;

/**
 * Returns the member's barcode and its expiry time for the specified business and user.
 */
class DynamicIdApi
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
     * `true` if a new dynamic ID should be generated.
`false` if the existing dynamic ID can be used, if it has not expired.
  If expired, a new dynamic ID will be generated anyway.
     *
     * @var bool|null
     */
    public ?bool $is_refresh = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User unique identifier.
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
     * Returns the member's barcode and its expiry time for the specified business and user.
     *
     * If the business uses dynamic barcodes, generates or refreshes a time-limited barcode and returns its value,
     * expiry countdown, and an image URL. If the business uses static barcodes, returns the member's static ID
     * with a zero expiry.
     *
     * @return array Parsed JSON response data.
     *   - int i_expire: Number of seconds left until the dynamic ID expires.
Zero means that business uses static barcode.
     *   - string text_barcode: Barcode of the member.

Dynamic, if business uses barcode as dynamic ID.
Or static, if business uses static ID. In this case `i_expire` will be zero.
     *   - string url_barcode: URL of the barcode image.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Member/DynamicId/DynamicId.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_refresh' => $this->is_refresh,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
