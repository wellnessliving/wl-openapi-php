<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQueryUpdatePostRequest
{
    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Access level for this report. One of {@link \WlSdk\RsReportAccessSid} constants.
     * Required - the report cannot be saved without selecting an access level.
     *
     * @var int|null
     * @see \WlSdk\RsReportAccessSid
     */
    public ?int $id_report_access = null;

    /**
     * JSON actions definition. Empty string is normalized to `null` (no actions configured).
     *
     * @var string|null
     */
    public ?string $json_actions = null;

    /**
     * JSON totals definition. Empty string is normalized to `null` (no totals configured).
     *
     * @var string|null
     */
    public ?string $json_totals = null;

    /**
     * Report query key. Primary key in the ReportQuerySql table.
     *
     * @var string|null
     */
    public ?string $k_report_query = null;

    /**
     * Body of the SQL query (SELECT only).
     *
     * @var string|null
     */
    public ?string $s_sql = null;

    /**
     * Human-readable title of the report.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'id_report_access' => $this->id_report_access,
            'json_actions' => $this->json_actions,
            'json_totals' => $this->json_totals,
            'k_report_query' => $this->k_report_query,
            's_sql' => $this->s_sql,
            's_title' => $this->s_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
