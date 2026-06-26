<?php

namespace WlSdk\Wl\Business\Report;

class ReportConfigGetRequest
{
    /**
     * The report CID. One of the {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}
     * subclasses.
     *
     * @var int|null
     * @see \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract
     */
    public ?int $cid_report = null;

    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the saved report. Primary key in the RsReportSaveSql table.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * User's UID key. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_report' => $this->cid_report,
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
