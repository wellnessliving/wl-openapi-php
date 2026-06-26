<?php

namespace WlSdk\Wl\Report\Dashboard\Menu;

class MenuReportGetRequest
{
    /**
     * Report ID (one of {@link \WlSdk\RsReportSid} constant for old generation reports) or CID report controller
     *   (subclass of {@link \WlSdk\Wl\Report\View\ReportViewControllerAbstract} for new generation reports).
     *
     * @var int|null
     * @see \WlSdk\RsReportSid
     */
    public ?int $id_report = null;

    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Report save key. Primary key in RsReportSaveSql table.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * User key.
     * Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_report' => $this->id_report,
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
