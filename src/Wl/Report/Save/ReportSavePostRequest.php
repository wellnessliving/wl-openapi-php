<?php

namespace WlSdk\Wl\Report\Save;

class ReportSavePostRequest
{
    /**
     * Business key of the saved report. Primary key in the RsBusinessSql table.
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
     * Filter raw data of the saved report.
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
     * Report category of the saved report.
     *
     * One of the {@link \WlSdk\RsReportCategorySid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsReportCategorySid
     */
    public ?int $id_report_category = null;

    /**
     * Filter raw data of the saved report. Uses to save empty filter values, actual when empty filter is the same
     * as all
     * values are chosen.
     *
     * Use this value instead of {@lind \Wl\Report\Save\ReportSaveApi::$a_filter}.
     *
     * In this array, key is name of a filter field.
     * A filter field is a property of a ReportFilterAbstract subclass.
     * Name of the property of that subclass corresponds key in this array.
     *
     * @var string|null
     */
    public ?string $json_filter = null;

    /**
     * Report save key. Primary key in the RsReportSaveSql table.
     *
     * @var string|null
     */
    public ?string $k_report_config = null;

    /**
     * Description of the saved report.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Title of the saved report.
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
            'id_report_category' => $this->id_report_category,
            'json_filter' => $this->json_filter,
            'k_report_config' => $this->k_report_config,
            'text_description' => $this->text_description,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
