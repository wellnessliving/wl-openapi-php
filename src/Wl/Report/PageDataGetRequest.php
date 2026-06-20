<?php
namespace WlSdk\Wl\Report;

class PageDataGetRequest
{
    /**
     * The page of results to show for each report in collection, starting at zero (set by default). The API will
     * return
     * 256 results per page. Key is report id from {@link \WlSdk\RsReportSid}, value is the page of results.
     *
     * @var int[]|null
     */
    public ?array $a_page = null;

    /**
     * The report group ID. One of the {@link \WlSdk\RsReportGroupSid} constants that describes the time
     * period (day, week, month, or year) for the report to cover.
     *
     * @var int|null
     */
    public ?int $id_report_group = null;

    /**
     * The report page ID. One of the {@link \WlSdk\RsReportPageSid} constants.
     * The collection of that page will be used to get list of reports.
     * 
     * The following report collections are currently available via the API:
     * * PROFILE_PURCHASE (ID 11) Collection with reports from client profile: memberships, packages,
     * session/duration
     * passes, single sessions, events, gift cards and groupon.
     *
     * @var int|null
     */
    public ?int $id_report_page = null;

    /**
     * The report view ID. One of the {@link \WlSdk\RsReportChartViewSid} constants.
     *
     * @var int|null
     */
    public ?int $id_report_view = null;

    /**
     * The key of business for which the report collection must be generated.
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
            'a_page' => $this->a_page,
            'id_report_group' => $this->id_report_group,
            'id_report_page' => $this->id_report_page,
            'id_report_view' => $this->id_report_view,
            'k_business' => $this->k_business,
            's_filter' => $this->s_filter,
            's_sort' => $this->s_sort,
            ],
            static fn($v) => $v !== null
        );
    }
}
