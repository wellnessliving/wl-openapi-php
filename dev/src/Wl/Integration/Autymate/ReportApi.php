<?php
namespace WlSdk\Wl\Integration\Autymate;

use WlSdk\WlSdkClient;

/**
 * Gets the daily transaction data.
 */
class ReportApi
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
     * List of payment methods to filter out in the report.
Each element is one of the [RsPayMethodSid](#/components/schemas/RsPayMethodSid) constants.
     *
     * @var int[]|null
     */
    public ?array $a_pay_method_remove = null;

    /**
     * The date in local time to retrieve transactions for.
     *
     * @var string|null
     */
    public ?string $dl_date = null;

    /**
     * The page of the report, starting from 0.
Each page will contain a maximum of `LIMIT` rows.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * Determines whether this report should be refreshed.

`true` to refresh this report if it's already generated.
Refreshing of the report may not be queried while report is being generated.

`false` to only return contents of the report.
If report isn't yet generated, it automatically starts the generation in the background.
     *
     * @var bool|null
     */
    public ?bool $is_refresh = null;

    /**
     * The key of the business for which the report must be generated.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The randomly generated 32 character string used to authenticate requests.
     *
     * @var string|null
     */
    public ?string $s_guid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the daily transaction data.
     *
     * Authenticates the request using the business GUID, runs the All Transactions report for the specified date,
     * and returns paginated rows augmented with Autymate-specific columns such as tax details, location address,
     * batch number, and payment method information.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_field: The list of fields in this report.

This array is effectively a title row for table that is returned in `a_row`.
     *   - string[][] a_row: The report data.

This is an indexed array in which one row is an indexed array also.

Indexes of the columns correspond to columns in `a_field`.
     *   - string[] a_warning: The warning list of the report, if applicable.
     *   - string dtu_complete: The date and time when this report has completed generation.

`null` if generation of this report isn't completed.
     *   - string dtu_queue: The date and time when this report was put in the generation queue.

Effectively, this is the time when a user clicked to view this report or the report for this day was first called.
     *   - string dtu_start: The date and time when generation of this report was started.

`null` if generation of this report hasn't started.
     *   - int id_report_status: The status of the report.

One of the [ReportGeneratorStatusSid](#/components/schemas/Wl.Report.Generator.ReportGeneratorStatusSid) constants.
     *   - bool is_more: If `true` then there are more report rows to get. Otherwise, `false` if all rows have been sent.
     *   - bool is_report_complete: Determines whether this report is complete. If this report is accessed on the current day, or is returning
a result that was cached on the current day it could be incomplete as not all the transactions for the day
are present.

If `true` then this report will be complete.

If `false` then this report could be incomplete.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Integration/Autymate/Report.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_pay_method_remove' => $this->a_pay_method_remove,
            'dl_date' => $this->dl_date,
            'i_page' => $this->i_page,
            'is_refresh' => $this->is_refresh,
            'k_business' => $this->k_business,
            's_guid' => $this->s_guid,
            ],
            static fn($v) => $v !== null
        );
    }
}
