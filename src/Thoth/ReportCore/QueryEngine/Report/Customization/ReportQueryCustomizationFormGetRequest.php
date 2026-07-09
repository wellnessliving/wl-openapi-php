<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report\Customization;

class ReportQueryCustomizationFormGetRequest
{
    /**
     * Report page CID.
     *
     * @var int|null
     */
    public ?int $cid_page = null;

    /**
     * Page CID.
     *
     * @var int|null
     */
    public ?int $cid_report = null;

    /**
     * Business primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * SQL query primary key. Primary key in ReportQuerySql.
     *
     * Scopes the customization record to a specific SQL query.
     * `null` loads the generic shared row as a backward-compatible fallback.
     *
     * @var string|null
     */
    public ?string $k_report_query = null;

    /**
     * Primary key of a saved report in RsReportSaveSql table.
     *
     * `null` means that report is not saved.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * Report CID list to that page customization form must be converted. String separated with `,`.
     *
     * May be specified only if CustomizationFormApi::$cid_page in not empty.
     *
     * @var string|null
     */
    public ?string $s_report = null;

    /**
     * Current user's primary key in PassportLoginAr table.
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
            'k_report_query' => $this->k_report_query,
            'k_report_save' => $this->k_report_save,
            's_report' => $this->s_report,
            'uid_actor' => $this->uid_actor,
            ],
            static fn ($v) => $v !== null
        );
    }
}
