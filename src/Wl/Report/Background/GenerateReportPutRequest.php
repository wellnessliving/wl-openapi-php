<?php

namespace WlSdk\Wl\Report\Background;

class GenerateReportPutRequest
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

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the report file generation.
     *
     * @var string|null
     */
    public ?string $k_report_accumulation = null;

    /**
     * Title of generated report.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_status' => $this->id_status,
            'k_business' => $this->k_business,
            'k_report_accumulation' => $this->k_report_accumulation,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
