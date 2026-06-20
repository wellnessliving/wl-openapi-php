<?php
namespace WlSdk\Wl\Report;

class AccessGetRequest
{
    /**
     * Report CID.
     * 
     * It's used mostly for second generation reports.
     * For first generation reports use `id_report` instead.
     * 
     * Only one of these two fields should be sent, but not both.
     *
     * @var \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract|null
     */
    public ?\WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract $cid_report = null;

    /**
     * Report ID.
     * 
     * It's used mostly for first generation reports.
     * For second generation reports use `cid_report` instead.
     * 
     * Only one of these two fields should be sent, but not both.
     *
     * @var \WlSdk\RsReportSid|null
     */
    public ?\WlSdk\RsReportSid $id_report = null;

    /**
     * ID of business for which access must be checked.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_report' => $this->cid_report?->value,
            'id_report' => $this->id_report?->value,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
