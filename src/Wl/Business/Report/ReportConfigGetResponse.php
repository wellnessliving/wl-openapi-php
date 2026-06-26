<?php

namespace WlSdk\Wl\Business\Report;

/**
 * Response from GET
 */
class ReportConfigGetResponse
{
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

    public function __construct(array $data)
    {
        $this->a_button_hidden = isset($data['a_button_hidden']) ? (array)$data['a_button_hidden'] : null;
        $this->a_button_visible = isset($data['a_button_visible']) ? (array)$data['a_button_visible'] : null;
        $this->a_cell_hidden = isset($data['a_cell_hidden']) ? (array)$data['a_cell_hidden'] : null;
        $this->a_cell_visible = isset($data['a_cell_visible']) ? (array)$data['a_cell_visible'] : null;
        $this->id_report_date = isset($data['id_report_date']) ? (int)$data['id_report_date'] : null;
        $this->show_client_details = isset($data['show_client_details']) ? (bool)$data['show_client_details'] : null;
    }
}
