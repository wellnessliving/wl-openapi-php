<?php
namespace WlSdk\Wl\Collector;

use WlSdk\WlSdkClient;

/**
 * Returns a list of debt payment transactions for the specified business within the given date range.
 */
class DebtTransactionApi
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
     * If set, this is the end of the date window. Only debt payments added before or on this date will be shown.

If left `null` and `dl_start` has been specified only debt payments added after the start date will be returned.
If left `null` and `dl_start` is also `null`, this will return debt payments from the previous month.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * If set, this is the start of the date window. Only debt payments added on or after this date will be shown.

If left `null` and `dl_end` has been specified, this will return debt payments since the beginning of time.
If left `null` and `dl_end` is also `null`, this will return debt payments from the previous month.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * If `true`, debt payments from test businesses will be returned. Otherwise, this will be `false` if only
debt payments from real businesses will be returned.
     *
     * @var bool|null
     */
    public ?bool $is_test = null;

    /**
     * The business key for which debt payments should be returned.

Use `null` if debt payments from all businesses should be returned.
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
     * Returns a list of debt payment transactions for the specified business within the given date range.
     *
     * Used by the Collections module to audit payments made against debts. The default date range
     * covers the previous day relative to the business timezone. Requires an active Collections
     * subscription and either the business privilege or emulation access.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_transaction: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Collector/DebtTransaction.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'is_test' => $this->is_test,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
