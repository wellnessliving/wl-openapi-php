<?php

namespace WlSdk\Wl\Report\Save;

class ReportDuplicatePostRequest
{
    /**
     * Business key within which duplicate operation is performed. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Report save key that should be duplicated. Primary key in the RsReportSaveSql table.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * UID user's key of the actor. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * Filter raw data of the duplicated report.
     *
     * @var array|null
     */
    public ?array $a_filter = null;

    /**
     * View widget settings raw data of the saved report.
     *
     * @var array|null
     */
    public ?array $a_settings = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid_actor' => $this->uid_actor,
            'a_filter' => $this->a_filter,
            'a_settings' => $this->a_settings,
            ],
            static fn ($v) => $v !== null
        );
    }
}
