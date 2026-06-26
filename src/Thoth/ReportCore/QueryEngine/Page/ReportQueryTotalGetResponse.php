<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

/**
 * Response from GET
 */
class ReportQueryTotalGetResponse
{
    /**
     * Computed totals. One entry per configured total card.
     * Empty array when the report has no totals configured or the report is inactive/missing.
     *
     * Each entry:
     *
     * @var ReportQueryTotalGetResponseTotal|null
     */
    public ?ReportQueryTotalGetResponseTotal $a_total = null;

    public function __construct(array $data)
    {
        $this->a_total = isset($data['a_total']) ? new ReportQueryTotalGetResponseTotal((array)$data['a_total']) : null;
    }
}
