<?php
namespace WlSdk\Wl\Report;

use WlSdk\WlSdkClient;

/**
 * Gets data of required report.
 */
class DataApi
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
     * The page of results to show, starting at zero. The API will return 256 results per page.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * The report ID.
The following reports are currently available via the API:
<ul>
    <li>[RsReportSid::LOGIN_LIST](#/components/schemas/RsReportSid) - All Clients Report (Reports tab, features date search)</li>
    <li>[RsReportSid::LOGIN_LIST_ALL](#/components/schemas/RsReportSid) - All Clients Report (Clients tab) Batch Report</li>
    <li>[RsReportSid::PAY_TRANSACTION_BATCH](#/components/schemas/RsReportSid) - Batch Report</li>
    <li>[RsReportSid::PURCHASE_ITEM_LIST_USER](#/components/schemas/RsReportSid) - Sales per Client Report</li>
    <li>[RsReportSid::PURCHASE_ITEM_ACCRUAL_CASH](#/components/schemas/RsReportSid) - All Sales Report</li>
</ul>
     *
     * @var int|null
     */
    public ?int $id_report = null;

    /**
     * The report group ID.
     *
     * @var int|null
     */
    public ?int $id_report_group = null;

    /**
     * The report page ID. One of the [RsReportPageSid](#/components/schemas/RsReportPageSid) constants.
If set, the collection of that page will be used, otherwise a collection of single report will be used.
     *
     * @var int|null
     */
    public ?int $id_report_page = null;

    /**
     * The report view ID. One of the [RsReportChartViewSid](#/components/schemas/RsReportChartViewSid) constants.
     *
     * @var int|null
     */
    public ?int $id_report_view = null;

    /**
     * The key of business for which the report must be generated.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Filter settings in encoded format.
     *
     * @var string|null
     */
    public ?string $s_filter = null;

    /**
     * The field to use for sorting report data.
     *
     * @var string|null
     */
    public ?string $s_sort = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets data of required report.
     *
     * Loads the specified report for the given business, applying filter, sort, and pagination parameters,
     * and returns the report rows and totals.
     *
     * @return array Parsed JSON response data.
     *   - array a_data: The report contents.

Contents of this array can vary based on the report that's loaded.
     *   - array a_total: The report total.

Contents of this array can vary based on the report that's loaded.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Report/Data.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_page' => $this->i_page,
            'id_report' => $this->id_report,
            'id_report_group' => $this->id_report_group,
            'id_report_page' => $this->id_report_page,
            'id_report_view' => $this->id_report_view,
            'k_business' => $this->k_business,
            's_filter' => $this->s_filter,
            's_sort' => $this->s_sort,
            ],
            static fn($v) => $v !== null
        );
    }
}
