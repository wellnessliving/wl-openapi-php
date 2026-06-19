<?php
namespace WlSdk\Wl\Report;

use WlSdk\WlSdkClient;

/**
 * Checks access to given report.
 */
class AccessApi
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
     * Report CID.

It's used mostly for second generation reports.
For first generation reports use `id_report` instead.

Only one of these two fields should be sent, but not both.
     *
     * @var int|null
     */
    public ?int $cid_report = null;

    /**
     * Report ID.

It's used mostly for first generation reports.
For second generation reports use `cid_report` instead.

Only one of these two fields should be sent, but not both.
     *
     * @var int|null
     */
    public ?int $id_report = null;

    /**
     * ID of business for which access must be checked.
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
     * Checks access to given report.
     *
     * Accepts either `id_report` (first-generation reports) or `cid_report` (second-generation reports), but not
     * both,
     * and returns `has_access` indicating whether the current user may view the report in the given business.
     *
     * @return array Parsed JSON response data.
     *   - bool has_access: `true` - access is granted; `false` - access is denied.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Report/Access.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'cid_report' => $this->cid_report,
            'id_report' => $this->id_report,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
