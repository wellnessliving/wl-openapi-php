<?php
namespace WlSdk\Thoth\WlPay\Method;

use WlSdk\WlSdkClient;

/**
 * Returns list of active payment methods data.
 */
class ListApi
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
     * Whether only active payment methods should be returned.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Whether payment method [RsPayMethodSid::ACCOUNT_MANUAL](#/components/schemas/RsPayMethodSid) should be included in response.
     *
     * @var bool|null
     */
    public ?bool $show_manual = null;

    /**
     * The key of a user to show information for.
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
     * Returns list of active payment methods data.
     *
     * Returns the system-level payment methods enabled for the business combined with any custom payment methods
     * configured for the business and accessible to the given user based on their role. When `$is_active` is
     * `false`, inactive custom methods are included as well.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_pay_method: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Thoth/WlPay/Method/List.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_active' => $this->is_active,
            'k_business' => $this->k_business,
            'show_manual' => $this->show_manual,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
