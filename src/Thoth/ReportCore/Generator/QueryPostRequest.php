<?php
namespace WlSdk\Thoth\ReportCore\Generator;

class QueryPostRequest
{
    /**
     * CID of the report to show.
     * 
     * One of
     * [ReportGeneratorReportAbstract](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
     * subclasses.
     *
     * @var int|null
     */
    public ?int $cid_report = null;

    /**
     * How many rows of the report to return.
     * 
     * `0` to not to return content at all.
     * This may be useful to get metadata of the report.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Offset.
     * 
     * How many rows of the report to skip at the beginning of the list.
     * 
     * Only return rows after the last skipped row.
     * 
     * `0` to return contents from the very beginning.
     *
     * @var int|null
     */
    public ?int $i_offset = null;

    /**
     * Defines whether actual or already generated report should be returned.
     * 
     * `true` to not attempt search generated report and generate it again.
     * `false` to attempt search generated report.
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
     * 
     * Set to `true` by the export controller to abort cell loading with a user-facing error
     * when the remaining execution time drops below `TIME_LIMIT_BUFFER_SECOND`.
     *
     * @var bool|null
     */
    public ?bool $is_export = null;

    /**
     * Whether this report should be refreshed.
     * 
     * `true` to refresh this report if it is already generated.
     * Refreshing of the report may not be queried while report is being generated.
     * 
     * `false` to only return contents of the report.
     * If report is not yet generated, it automatically starts the generation in the background.
     *
     * @var bool|null
     */
    public ?bool $is_refresh = null;

    /**
     * Filters that should be applied to the report.
     * 
     * In this array, key is name of a filter field.
     * A filter field is a property of a ReportFilterAbstract subclass.
     * Name of the property of that subclass corresponds key in this array.
     *
     * @var string|null
     */
    public ?string $json_filter = null;

    /**
     * Key of the business which report should be shown.
     * 
     * Primary key in RsBusinessSql.
     * 
     * `0` or an empty string for system-wide reports.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Sorting order.
     * 
     * A comma-separated list of fields to sort by.
     * 
     * Name of a field may be prepended with a `+` or `-` sign to sort in ascending or descending order.
     * Ascending order is the default.
     * 
     * You may sort reports by report fields and by cell fields.
     * 
     * To sort by a report field, just specify name of that field.
     * 
     * To sort by a cell field, specify name of a report field and name of the cell field.
     * Separate with a dot. For example: `o_account.m_amount`.
     * 
     * You may specify a field which contains objects of ReportGeneratorCellAbstract without
     * specification of a name of a cell field.
     * In this case sorting specified by ReportGeneratorCellAbstract::SORT will be applied.
     * 
     * Example value: `s_first,+s_last,-o_account.m_amount,o_address`.
     * 
     * Means the following:
     * 
     * * sort by `s_first` in ascending order (which is the default).
     * * sort by `s_last` in ascending order (which is specified explicitly).
     * * sort by `m_amount` field of `o_account` cell in descending order.
     * * sort by default field (i.e. the one marked with &#64;`sort` tag) of `o_address` cell in ascending order.
     * 
     * Note that you may not sort by fields that are marked with &#64;`store-no` tag.
     *
     * @var string|null
     */
    public ?string $s_sort = null;

    /**
     * An SQL query that should be executed on report table.
     * 
     * See `namespace.Wl/Report/Generator/doc/report-query-sql.md` for details.
     * 
     * Empty string to select all columns of the report table.
     *
     * @var string|null
     */
    public ?string $s_sql = null;

    /**
     * Actor user.
     * 
     * Primary key in PassportLoginSql.
     * 
     * `0` or an empty string for guests.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    public function params(): array
    {
        return array_filter(
            [
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
