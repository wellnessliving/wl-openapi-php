<?php
namespace WlSdk\Wl\Report;

use WlSdk\WlSdkClient;

/**
 * Gets data of required report collection.
 */
class PageDataApi
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
     * The page of results to show for each report in collection, starting at zero (set by default). The API will return
256 results per page. Key is report id from [RsReportSid](#/components/schemas/RsReportSid), value is the page of results.
     *
     * @var int[]|null
     */
    public ?array $a_page = null;

    /**
     * The report group ID. One of the [RsReportGroupSid](#/components/schemas/RsReportGroupSid) constants that describes the time
period (day, week, month, or year) for the report to cover.
     *
     * @var int|null
     */
    public ?int $id_report_group = null;

    /**
     * The report page ID. One of the [RsReportPageSid](#/components/schemas/RsReportPageSid) constants.
The collection of that page will be used to get list of reports.

The following report collections are currently available via the API:
* PROFILE_PURCHASE (ID 11) Collection with reports from client profile: memberships, packages, session/duration
passes, single sessions, events, gift cards and groupon.
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
     * The key of business for which the report collection must be generated.
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
     * Gets data of required report collection.
     *
     * Loads all reports belonging to the specified report page collection for the given business, applying shared
     * filter, sort, group, and view parameters, and returns the data for each report keyed by report ID.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_data: List of the reports contents. Key is the report id from [RsReportSid](#/components/schemas/RsReportSid), value is report contents.
Contents can vary based on the report that's loaded.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Report/PageData.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_page' => $this->a_page,
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
