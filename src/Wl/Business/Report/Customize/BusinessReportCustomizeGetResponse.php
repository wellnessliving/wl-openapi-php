<?php

namespace WlSdk\Wl\Business\Report\Customize;

/**
 * Response from GET
 */
class BusinessReportCustomizeGetResponse
{
    /**
     * Button config.
     *
     * @var array|null
     */
    public ?array $a_button = null;

    /**
     * Config of the report columns.
     *
     * @var BusinessReportCustomizeGetResponseColumn|null
     */
    public ?BusinessReportCustomizeGetResponseColumn $a_column = null;

    /**
     * List of the available report dates.
     *
     * @var BusinessReportCustomizeGetResponseReportDate|null
     */
    public ?BusinessReportCustomizeGetResponseReportDate $a_report_date = null;

    /**
     * Whether that the report has a client column.
     *
     * @var bool|null
     */
    public ?bool $has_client = null;

    /**
     * Default report date ID. One of the {@link \WlSdk\RsReportDateSid} constants.
     *
     * `null` if default report date is not defined.
     *
     * @var int|null
     * @see \WlSdk\RsReportDateSid
     */
    public ?int $id_report_date_default = null;

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

    public function __construct(array $data)
    {
        $this->a_button = isset($data['a_button']) ? (array)$data['a_button'] : null;
        $this->a_column = isset($data['a_column']) ? new BusinessReportCustomizeGetResponseColumn((array)$data['a_column']) : null;
        $this->a_report_date = isset($data['a_report_date']) ? new BusinessReportCustomizeGetResponseReportDate((array)$data['a_report_date']) : null;
        $this->has_client = isset($data['has_client']) ? (bool)$data['has_client'] : null;
        $this->id_report_date_default = isset($data['id_report_date_default']) ? (int)$data['id_report_date_default'] : null;
        $this->is_report_date_default = isset($data['is_report_date_default']) ? (bool)$data['is_report_date_default'] : null;
        $this->is_report_generate_last = isset($data['is_report_generate_last']) ? (bool)$data['is_report_generate_last'] : null;
        $this->show_button_selection = isset($data['show_button_selection']) ? (bool)$data['show_button_selection'] : null;
        $this->show_client_details = isset($data['show_client_details']) ? (string)$data['show_client_details'] : null;
    }
}
