<?php

namespace WlSdk\Thoth\ReportCore\Generator;

class FilterGetRequest
{
    /**
     * CID of a report page.
     *
     * One of {@link \WlSdk\Thoth\ReportCore\Generator\ReportPageAbstract} subclasses.
     *
     * Empty in a case of a single report.
     *
     * @var int|null
     * @see \WlSdk\Thoth\ReportCore\Generator\ReportPageAbstract
     */
    public ?int $cid_page = null;

    /**
     * CID of a report.
     *
     * One of {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract} subclasses.
     *
     * Empty in a case of a report page.
     *
     * @var int|null
     * @see \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract
     */
    public ?int $cid_report = null;

    /**
     * Key of the business that report is shown.
     *
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the saved report.
     *
     * Primary key in RsReportSaveSql.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * Actor user key.
     *
     * Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_page' => $this->cid_page,
            'cid_report' => $this->cid_report,
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid_actor' => $this->uid_actor,
            ],
            static fn ($v) => $v !== null
        );
    }
}
