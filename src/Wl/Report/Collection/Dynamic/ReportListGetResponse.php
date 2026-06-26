<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

/**
 * Response from GET
 */
class ReportListGetResponse
{
    /**
     * List of available reports. Each item has the following structure:
     *
     * @var ReportListGetResponseReportList|null
     */
    public ?ReportListGetResponseReportList $a_report_list = null;

    public function __construct(array $data)
    {
        $this->a_report_list = isset($data['a_report_list']) ? new ReportListGetResponseReportList((array)$data['a_report_list']) : null;
    }
}
