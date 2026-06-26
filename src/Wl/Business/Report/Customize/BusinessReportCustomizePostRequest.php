<?php

namespace WlSdk\Wl\Business\Report\Customize;

class BusinessReportCustomizePostRequest
{
    /**
     * Report ID. One of the {@link \WlSdk\RsReportSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsReportSid
     */
    public ?int $id_report = null;

    /**
     * Whether predefined filter should be generated or user should select filter prior to generate report.
     *
     * @var bool|null
     */
    public ?bool $is_report_date_default = null;

    /**
     * Whether last generated date range should be opened by default.
     *
     * @var bool|null
     */
    public ?bool $is_report_generate_last = null;

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

    /**
     * Button config.
     *
     * @var array|null
     */
    public ?array $a_button = null;

    /**
     * Selected columns of the report.
     *
     * @var string[]|null
     */
    public ?array $a_column_selected = null;

    /**
     * Whether buttons for date range selection should be shown nearby date filter.
     *
     * @var bool|null
     */
    public ?bool $show_button_selection = null;

    /**
     * Whether that client details information should be shown.
     *
     * @var string|null
     */
    public ?string $show_client_details = null;

    /**
     * Selected report date SID.
     *
     * @var string|null
     */
    public ?string $sid_report_date = null;

    /**
     * Selected report date range SID.
     *
     * @var string|null
     */
    public ?string $sid_report_date_range = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_report' => $this->id_report,
            'is_report_date_default' => $this->is_report_date_default,
            'is_report_generate_last' => $this->is_report_generate_last,
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid' => $this->uid,
            'a_button' => $this->a_button,
            'a_column_selected' => $this->a_column_selected,
            'show_button_selection' => $this->show_button_selection,
            'show_client_details' => $this->show_client_details,
            'sid_report_date' => $this->sid_report_date,
            'sid_report_date_range' => $this->sid_report_date_range,
            ],
            static fn ($v) => $v !== null
        );
    }
}
