<?php
namespace WlSdk\Thoth\WlPay\Transaction\Report;

use WlSdk\WlSdkClient;

/**
 * Gets the daily transaction data.
 */
class TransactionAllPaymentApi
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
     * The end date in local time to retrieve transactions for.
     *
     * @var string|null
     */
    public ?string $dl_date_end = null;

    /**
     * The end date in local time to retrieve transactions for.
     *
     * @var string|null
     */
    public ?string $dl_date_start = null;

    /**
     * The page of the report, starting from 0.
Each page will contain a maximum of `LIMIT` rows.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * Determines whether the report should be refreshed.

If `true`, this report should be refreshed. A report refresh can't be requested while the report is being generated.
Otherwise, `false` to only return contents of the report.

If the report hasn't yet been generated, it will automatically start generating in the background.
     *
     * @var bool|null
     */
    public ?bool $is_refresh = null;

    /**
     * The key of the business for which report should be generated.
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
     * Gets the daily transaction data.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_field: A list of fields in the report.

This array is effectively a title row for the table returned in [TransactionAllPaymentApi](/Thoth/WlPay/Transaction/Report/TransactionAllPayment.json).
     *   - array a_row: The report data.

This is an indexed array in which one row is also an indexed array.

Indexes of the columns correspond to the columns in [TransactionAllPaymentApi](/Thoth/WlPay/Transaction/Report/TransactionAllPayment.json).
     *   - string[] a_warning: The warning list of the report.
     *   - string dtu_complete: The date and time if the report has completed generation. Otherwise, this will be `null`.
     *   - string dtu_queue: The date and time if this report has been put in the generation queue. Otherwise, this will be `null`.
     *   - string dtu_start: The date and time if generation of this report has started. Otherwise, this will be `null`.
     *   - int id_report_status: The report status.

One of [ReportGeneratorStatusSid](#/components/schemas/Wl.Report.Generator.ReportGeneratorStatusSid) constants.
     *   - bool is_more: Determines whether to show more rows in the report.

If `true`, there are more report rows to get. Otherwise, `false` to indicate that all rows in the report have
already been retrieved.
     *   - bool is_report_complete: Determines whether the report is complete.

If the report is accessed on the current day, or is returning a result that was cached on the current day, it could
be incomplete as not all the transactions for the day are present.

If `true`, the report has been completed. Otherwise, `false`.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Thoth/WlPay/Transaction/Report/TransactionAllPayment.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dl_date_end' => $this->dl_date_end,
            'dl_date_start' => $this->dl_date_start,
            'i_page' => $this->i_page,
            'is_refresh' => $this->is_refresh,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
