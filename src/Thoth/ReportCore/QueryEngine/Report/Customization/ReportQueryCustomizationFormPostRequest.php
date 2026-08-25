<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report\Customization;

class ReportQueryCustomizationFormPostRequest
{
    /**
     * Report page CID.
     *
     * @var int|null
     * @see \WlSdk\Thoth\ReportCore\Generator\ReportPageAbstract
     */
    public ?int $cid_page = null;

    /**
     * Report CID.
     *
     * @var int|null
     * @see \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract
     */
    public ?int $cid_report = null;

    /**
     * Business primary key.
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
     * Primary key of a saved report.
     *
     * `null` means that report is not saved.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * Current user's primary key.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * Customization form data keyed by report or page CID. Each value has the following structure:
     *
     * @var array|null
     */
    public ?array $a_customization_form = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_page' => $this->cid_page,
            'cid_report' => $this->cid_report,
            'k_business' => $this->k_business,
            'k_report_query' => $this->k_report_query,
            'k_report_save' => $this->k_report_save,
            'uid_actor' => $this->uid_actor,
            'a_customization_form' => $this->a_customization_form,
            ],
            static fn ($v) => $v !== null
        );
    }
}
