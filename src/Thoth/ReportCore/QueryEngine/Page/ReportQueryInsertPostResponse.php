<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

/**
 * Response from POST
 */
class ReportQueryInsertPostResponse
{
    /**
     * Key of the newly created record. Primary key in the ReportQuerySql table.
     *
     * @var string|null
     */
    public ?string $k_report_query = null;

    public function __construct(array $data)
    {
        $this->k_report_query = isset($data['k_report_query']) ? (string)$data['k_report_query'] : null;
    }
}
