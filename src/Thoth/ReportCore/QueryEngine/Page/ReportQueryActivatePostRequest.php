<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQueryActivatePostRequest
{
    /**
     * Business key. `'0'` when activating a system-level report.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * `1` to activate the record, `0` to deactivate (soft-delete).
     *
     * @var int|null
     */
    public ?int $is_active = null;

    /**
     * Report query key. Primary key in the ReportQuerySql table.
     *
     * @var string|null
     */
    public ?string $k_report_query = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'is_active' => $this->is_active,
            'k_report_query' => $this->k_report_query,
            ],
            static fn ($v) => $v !== null
        );
    }
}
