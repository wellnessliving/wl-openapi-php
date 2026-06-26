<?php

namespace WlSdk\Wl\Report\Background;

/**
 * Response from GET
 */
class GenerateReportGetResponse
{
    /**
     * Status of the report background generation.
     * One of {@link \WlSdk\Wl\Report\Accumulation\ReportAccumulationStatusSid} constants.
     * `0` in case of report title updating.
     *
     * @var int|null
     * @see \WlSdk\Wl\Report\Accumulation\ReportAccumulationStatusSid
     */
    public ?int $id_status = null;

    public function __construct(array $data)
    {
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
    }
}
