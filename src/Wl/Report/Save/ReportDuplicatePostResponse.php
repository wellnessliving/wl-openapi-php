<?php

namespace WlSdk\Wl\Report\Save;

/**
 * Response from POST
 */
class ReportDuplicatePostResponse
{
    /**
     * Report save key that should be duplicated. Primary key in the RsReportSaveSql table.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    public function __construct(array $data)
    {
        $this->k_report_save = isset($data['k_report_save']) ? (string)$data['k_report_save'] : null;
    }
}
