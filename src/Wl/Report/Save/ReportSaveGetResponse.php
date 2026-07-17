<?php

namespace WlSdk\Wl\Report\Save;

/**
 * Response from GET
 */
class ReportSaveGetResponse
{
    /**
     * Filter raw data of the saved report.
     *
     * Keys are filter field names, values are the raw filter values.
     *
     * @var array|null
     */
    public ?array $a_filter = null;

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

    public function __construct(array $data)
    {
        $this->a_filter = isset($data['a_filter']) ? (array)$data['a_filter'] : null;
        $this->id_report_category = isset($data['id_report_category']) ? (int)$data['id_report_category'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
