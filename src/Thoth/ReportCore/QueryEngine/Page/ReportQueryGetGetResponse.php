<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

/**
 * Response from GET
 */
class ReportQueryGetGetResponse
{
    /**
     * Access level for this report. One of {@link \WlSdk\RsReportAccessSid} constants.
     * `0` when the record does not have an access level set.
     *
     * @var int|null
     * @see \WlSdk\RsReportAccessSid
     */
    public ?int $id_report_access = null;

    /**
     * Whether the record is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether this is a system-level report (visible to all businesses).
     *
     * @var bool|null
     */
    public ?bool $is_system = null;

    /**
     * JSON actions definition, or empty string if not set.
     *
     * @var string|null
     */
    public ?string $json_actions = null;

    /**
     * JSON totals definition, or empty string if not set.
     *
     * @var string|null
     */
    public ?string $json_totals = null;

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

    public function __construct(array $data)
    {
        $this->id_report_access = isset($data['id_report_access']) ? (int)$data['id_report_access'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_system = isset($data['is_system']) ? (bool)$data['is_system'] : null;
        $this->json_actions = isset($data['json_actions']) ? (string)$data['json_actions'] : null;
        $this->json_totals = isset($data['json_totals']) ? (string)$data['json_totals'] : null;
        $this->s_sql = isset($data['s_sql']) ? (string)$data['s_sql'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
