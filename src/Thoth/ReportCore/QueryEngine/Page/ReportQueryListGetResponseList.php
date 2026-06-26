<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQueryListGetResponseList
{
    /**
     * UTC datetime of the last update.
     *
     * @var string|null
     */
    public ?string $dtu_update = null;

    /**
     * `true` if the record is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * `true` if this is a system-level report visible to all businesses, `false` for business-specific reports.
     *
     * @var bool|null
     */
    public ?bool $is_system = null;

    /**
     * Report query key. Primary key in the ReportQuerySql table.
     *
     * @var string|null
     */
    public ?string $k_report_query = null;

    /**
     * Human-readable report title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * URL of the report view page for this record.
     *
     * @var string|null
     */
    public ?string $url_view = null;

    public function __construct(array $data)
    {
        $this->dtu_update = isset($data['dtu_update']) ? (string)$data['dtu_update'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_system = isset($data['is_system']) ? (bool)$data['is_system'] : null;
        $this->k_report_query = isset($data['k_report_query']) ? (string)$data['k_report_query'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->url_view = isset($data['url_view']) ? (string)$data['url_view'] : null;
    }
}
