<?php

namespace WlSdk\Thoth\ReportCore\Generator;

class FilterInfoPostRequest
{
    /**
     * CID of the report which filter information should be retrieved.
     *
     * One of {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract} subclasses.
     *
     * @var int|null
     * @see \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract
     */
    public ?int $cid_report = null;

    /**
     * Key of the business which report should be shown.
     *
     * Primary key in RsBusinessSql.
     *
     * `0` or an empty string for system-wide reports.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Actor user.
     *
     * Primary key in PassportLoginSql.
     *
     * `0` or an empty string for guests.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * Filters that should be applied to the report.
     *
     * In this array, key is name of a filter field.
     * A filter field is a property of a ReportFilterAbstract subclass.
     * Name of the property of that subclass corresponds key in this array.
     *
     * @var string|null
     */
    public ?string $json_filter = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_report' => $this->cid_report,
            'k_business' => $this->k_business,
            'uid_actor' => $this->uid_actor,
            'json_filter' => $this->json_filter,
            ],
            static fn ($v) => $v !== null
        );
    }
}
