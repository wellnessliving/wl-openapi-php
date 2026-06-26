<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQueryTotalGetRequest
{
    /**
     * Filter values forwarded to the executor context. Accepts date-range keys
     *  (`dl_start`, `dl_end` as `'YYYY-MM-DD'`) and any user-facing `@placeholder` variables.
     *
     * @var array|null
     */
    public ?array $a_filter = null;

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
            'a_filter' => $this->a_filter,
            'k_business' => $this->k_business,
            'k_report_query' => $this->k_report_query,
            ],
            static fn ($v) => $v !== null
        );
    }
}
