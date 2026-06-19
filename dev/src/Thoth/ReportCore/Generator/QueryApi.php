<?php
namespace WlSdk\Thoth\ReportCore\Generator;

use WlSdk\WlSdkClient;

/**
 * Returns contents of a report as a table.
 */
class QueryApi
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
     * CID of the report to show.

One of [ReportGeneratorReportAbstract](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract) subclasses.
     *
     * @var int|null
     */
    public ?int $cid_report = null;

    /**
     * How many rows of the report to return.

`0` to not to return content at all.
This may be useful to get metadata of the report.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Offset.

How many rows of the report to skip at the beginning of the list.

Only return rows after the last skipped row.

`0` to return contents from the very beginning.
     *
     * @var int|null
     */
    public ?int $i_offset = null;

    /**
     * Defines whether actual or already generated report should be returned.

`true` to not attempt search generated report and generate it again.
`false` to attempt search generated report.
     *
     * @var bool|null
     */
    public ?bool $is_actual = null;

    /**
     * Whether report is generating for the backend.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Whether the timeout check should be enforced during cell loading.

Set to `true` by the export controller to abort cell loading with a user-facing error
when the remaining execution time drops below `TIME_LIMIT_BUFFER_SECOND`.
     *
     * @var bool|null
     */
    public ?bool $is_export = null;

    /**
     * Whether this report should be refreshed.

`true` to refresh this report if it is already generated.
Refreshing of the report may not be queried while report is being generated.

`false` to only return contents of the report.
If report is not yet generated, it automatically starts the generation in the background.
     *
     * @var bool|null
     */
    public ?bool $is_refresh = null;

    /**
     * Filters that should be applied to the report.

In this array, key is name of a filter field.
     *
     * @var string|null
     */
    public ?string $json_filter = null;

    /**
     * Key of the business which report should be shown.

`0` or an empty string for system-wide reports.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Sorting order.

A comma-separated list of fields to sort by.

Name of a field may be prepended with a `+` or `-` sign to sort in ascending or descending order.
Ascending order is the default.

You may sort reports by report fields and by cell fields.

To sort by a report field, just specify name of that field.

To sort by a cell field, specify name of a report field and name of the cell field.
Separate with a dot. For example: `o_account.m_amount`.



Example value: `s_first,+s_last,-o_account.m_amount,o_address`.

Means the following:

* sort by `s_first` in ascending order (which is the default).
* sort by `s_last` in ascending order (which is specified explicitly).
* sort by `m_amount` field of `o_account` cell in descending order.
* sort by default field (i.e. the one marked with &#64;`sort` tag) of `o_address` cell in ascending order.

Note that you may not sort by fields that are marked with &#64;`store-no` tag.
     *
     * @var string|null
     */
    public ?string $s_sort = null;

    /**
     * An SQL query that should be executed on report table.

See `namespace.Wl/Report/Generator/doc/report-query-sql.md` for details.

Empty string to select all columns of the report table.
     *
     * @var string|null
     */
    public ?string $s_sql = null;

    /**
     * Actor user.

`0` or an empty string for guests.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns contents of a report as a table.
     *
     * If the report is not yet generated, it gets generated.
     * If the report is being generated now, partial content may be returned.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_dynamic: A list of dynamic fields in this report.

Copy of result of [ReportGeneratorReportAbstract::generatorDynamic()](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract).
     *   - string[] a_field: A list of fields in this report.

This array is effectively a title row for table that is returned in [QueryApi](/Thoth/ReportCore/Generator/Query.json).
     *   - string[][] a_row: Report data.

This is an indexed array in which one row is an indexed array also.

Indexes of the columns correspond columns in [QueryApi](/Thoth/ReportCore/Generator/Query.json).
     *   - int[] a_stale: A list of stale rows.

This array is only filled in when report is being updated now, or due to some other reasons contains mixed version
data (some data from the latest generation, and other from one of previous generations).

Value is index in [QueryApi](/Thoth/ReportCore/Generator/Query.json).

If a row is not listed here, it is of the latest version.
     *   - string[] a_warning: Warning list of the report.
     *   - string dtu_complete: Date and time when this report has completed generation.

`null` if generation of this report is not completed.
     *   - string dtu_queue: Date and time when this report was put on generation queue.

Effectively, this is the time when a user clicked to view this report.
     *   - string dtu_start: Date and time when generation of this report has started.

`null` if generation of this report is not started.
     *   - int i_cas_change: A CAS (compare-and-swap) number that allows to track changes in the report storage.

This number is changed every time content of the report gets updated.
If this number is not changed, the content is not updated.
     *   - int id_report_status: Status of the report.

One of [ReportGeneratorStatusSid](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorStatusSid) constants.
     *   - string s_report: Key of this report.

This key may be used to subscribe to report changes with [UpdateChannel](#/components/schemas/Core.WebSocket.ChannelBroadcast).
     *   - string text_error: Text of an error message that occurred during generation of the report.

An empty string in no error messages have occurred.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Thoth/ReportCore/Generator/Query.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'cid_report' => $this->cid_report,
            'i_limit' => $this->i_limit,
            'i_offset' => $this->i_offset,
            'is_actual' => $this->is_actual,
            'is_backend' => $this->is_backend,
            'is_export' => $this->is_export,
            'is_refresh' => $this->is_refresh,
            'json_filter' => $this->json_filter,
            'k_business' => $this->k_business,
            's_sort' => $this->s_sort,
            's_sql' => $this->s_sql,
            'uid_actor' => $this->uid_actor,
            ],
            static fn($v) => $v !== null
        );
    }
}
