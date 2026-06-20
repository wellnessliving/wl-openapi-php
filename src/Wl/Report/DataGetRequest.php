<?php
namespace WlSdk\Wl\Report;

class DataGetRequest
{
    /**
     * The page of results to show, starting at zero. The API will return 256 results per page.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * The report ID.
     * The following reports are currently available via the API:
     * <ul>
     *     <li>{@link \WlSdk\RsReportSid} - All Clients Report (Reports tab, features date search)</li>
     *     <li>{@link \WlSdk\RsReportSid} - All Clients Report (Clients tab) Batch Report</li>
     *     <li>{@link \WlSdk\RsReportSid} - Batch Report</li>
     *     <li>{@link \WlSdk\RsReportSid} - Sales per Client Report</li>
     *     <li>{@link \WlSdk\RsReportSid} - All Sales Report</li>
     * </ul>
     *
     * @var \WlSdk\RsReportSid|null
     */
    public ?\WlSdk\RsReportSid $id_report = null;

    /**
     * The report group ID.
     *
     * @var \WlSdk\RsReportGroupSid|null
     */
    public ?\WlSdk\RsReportGroupSid $id_report_group = null;

    /**
     * The report page ID. One of the {@link \WlSdk\RsReportPageSid} constants.
     * If set, the collection of that page will be used, otherwise a collection of single report will be used.
     *
     * @var \WlSdk\RsReportPageSid|null
     */
    public ?\WlSdk\RsReportPageSid $id_report_page = null;

    /**
     * The report view ID. One of the {@link \WlSdk\RsReportChartViewSid} constants.
     *
     * @var \WlSdk\RsReportChartViewSid|null
     */
    public ?\WlSdk\RsReportChartViewSid $id_report_view = null;

    /**
     * The key of business for which the report must be generated.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Filter settings in encoded format.
     *
     * @var string|null
     */
    public ?string $s_filter = null;

    /**
     * The field to use for sorting report data.
     *
     * @var string|null
     */
    public ?string $s_sort = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_page' => $this->i_page,
            'id_report' => $this->id_report?->value,
            'id_report_group' => $this->id_report_group?->value,
            'id_report_page' => $this->id_report_page?->value,
            'id_report_view' => $this->id_report_view?->value,
            'k_business' => $this->k_business,
            's_filter' => $this->s_filter,
            's_sort' => $this->s_sort,
            ],
            static fn($v) => $v !== null
        );
    }
}
