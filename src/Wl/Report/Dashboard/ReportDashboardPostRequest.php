<?php

namespace WlSdk\Wl\Report\Dashboard;

class ReportDashboardPostRequest
{
    /**
     * Business key of the report. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID user's key of the actor. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * Filter raw data of the report.
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

    /**
     * CID of the controller class. Subclass of {@link \WlSdk\Wl\Report\View\ReportViewControllerAbstract}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Report\View\ReportViewControllerAbstract
     */
    public ?int $cid_controller = null;

    /**
     * Filter raw data of the saved report. Uses to save empty filter values, actual when empty filter is the same
     * as all
     * values are chosen.
     *
     * Use this value instead of `a_filter`.
     *
     * In this array, key is name of a filter field.
     * A filter field is a property of a ReportFilterAbstract subclass.
     * Name of the property of that subclass corresponds key in this array.
     *
     * @var string|null
     */
    public ?string $json_filter = null;

    /**
     * Report dashboard key to which report should be added. Primary key in the RsReportDashboardSql table.
     *
     * @var string|null
     */
    public ?string $k_report_dashboard = null;

    /**
     * Description of the report.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Title of the report.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_actor' => $this->uid_actor,
            'a_filter' => $this->a_filter,
            'a_settings' => $this->a_settings,
            'cid_controller' => $this->cid_controller,
            'json_filter' => $this->json_filter,
            'k_report_dashboard' => $this->k_report_dashboard,
            'text_description' => $this->text_description,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
