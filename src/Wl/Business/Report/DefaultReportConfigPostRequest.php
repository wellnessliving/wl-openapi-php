<?php

namespace WlSdk\Wl\Business\Report;

class DefaultReportConfigPostRequest
{
    /**
     * Hidden feature button list.
     * Each element is a constant of {@link
     * \WlSdk\Wl\Report\Container\ControlPanel\ControlButton\ReportContainerControlButtonSid}.
     *
     * May be an empty array.
     *
     * @var int[]|null
     */
    public ?array $a_button_hidden = null;

    /**
     * Visible feature button list.
     * Each element is a constant of {@link
     * \WlSdk\Wl\Report\Container\ControlPanel\ControlButton\ReportContainerControlButtonSid}.
     *
     * May be an empty array.
     *
     * @var int[]|null
     */
    public ?array $a_button_visible = null;

    /**
     * Selected report date range.
     * One of the {@link \WlSdk\RsReportDateSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsReportDateSid
     */
    public ?int $id_report_date = null;

    /**
     * Does report use preselected date range. If not - open date range page before report generation.
     *
     * @var bool|null
     */
    public ?bool $is_report_date_default = null;

    /**
     * Whether last generated range should be used instead of generating new report.
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
     * Whether buttons for date range selection should be shown nearby date filter.
     *
     * @var bool|null
     */
    public ?bool $show_button_selection = null;

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
            'a_button_hidden' => $this->a_button_hidden,
            'a_button_visible' => $this->a_button_visible,
            'id_report_date' => $this->id_report_date,
            'is_report_date_default' => $this->is_report_date_default,
            'is_report_generate_last' => $this->is_report_generate_last,
            'k_business' => $this->k_business,
            'show_button_selection' => $this->show_button_selection,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
