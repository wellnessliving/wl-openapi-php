<?php

namespace WlSdk\Wl\Business\Report;

class ReportConfigPostRequest
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

    /**
     * Hidden feature button list.
     * Each element is a constant of {@link
     * \WlSdk\Wl\Report\Container\ControlPanel\ControlButton\ReportContainerControlButtonSid}.
     *
     * May be an empty array. Order of items is relevant.
     * `null` if configuration is not save.
     *
     * @var int[]|null
     */
    public ?array $a_button_hidden = null;

    /**
     * Visible feature button list.
     * Each element is a constant of {@link
     * \WlSdk\Wl\Report\Container\ControlPanel\ControlButton\ReportContainerControlButtonSid}.
     *
     * May be an empty array. Order of items is relevant.
     * `null` if configuration is not save.
     *
     * @var int[]|null
     */
    public ?array $a_button_visible = null;

    /**
     * Hidden cell list.
     * See `a_cell_hidden`.
     *
     * @var string[]|null
     */
    public ?array $a_cell_hidden = null;

    /**
     * Visible cell list. Order of items is relevant.
     * See `a_cell_visible`.
     *
     * @var string[]|null
     */
    public ?array $a_cell_visible = null;

    /**
     * Selected report date range.
     * One of the {@link \WlSdk\RsReportDateSid} constants.
     *
     * `null` if configuration is not save.
     *
     * @var int|null
     * @see \WlSdk\RsReportDateSid
     */
    public ?int $id_report_date = null;

    /**
     * Whether to show extended client details in the client info cell.
     *
     * `null` if report doesn't have a client cell.
     *
     * @var bool|null
     */
    public ?bool $show_client_details = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_report' => $this->cid_report,
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid' => $this->uid,
            'a_button_hidden' => $this->a_button_hidden,
            'a_button_visible' => $this->a_button_visible,
            'a_cell_hidden' => $this->a_cell_hidden,
            'a_cell_visible' => $this->a_cell_visible,
            'id_report_date' => $this->id_report_date,
            'show_client_details' => $this->show_client_details,
            ],
            static fn ($v) => $v !== null
        );
    }
}
