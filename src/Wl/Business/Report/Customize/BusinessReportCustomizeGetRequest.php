<?php

namespace WlSdk\Wl\Business\Report\Customize;

class BusinessReportCustomizeGetRequest
{
    /**
     * Report ID. One of the {@link \WlSdk\RsReportSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsReportSid
     */
    public ?int $id_report = null;

    /**
     * Report page ID. One of the {@link \WlSdk\RsReportPageSid} constants.
     *
     * `null` if report is rendered in a single report collection.
     *
     * @var int|null
     * @see \WlSdk\RsReportPageSid
     */
    public ?int $id_report_page = null;

    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Report save key. Primary key in the RsReportSaveSql table.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * User key. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_report' => $this->id_report,
            'id_report_page' => $this->id_report_page,
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
