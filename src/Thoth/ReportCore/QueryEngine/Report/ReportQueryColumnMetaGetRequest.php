<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report;

class ReportQueryColumnMetaGetRequest
{
    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
            'k_report_query' => $this->k_report_query,
            ],
            static fn ($v) => $v !== null
        );
    }
}
