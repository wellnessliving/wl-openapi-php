<?php

namespace WlSdk\Wl\Report;

/**
 * Response from GET
 */
class InfoGetResponse
{
    /**
     * Report type ID. One of {@link \WlSdk\RsReportTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsReportTypeSid
     */
    public ?int $id_report_type = null;

    public function __construct(array $data)
    {
        $this->id_report_type = isset($data['id_report_type']) ? (int)$data['id_report_type'] : null;
    }
}
