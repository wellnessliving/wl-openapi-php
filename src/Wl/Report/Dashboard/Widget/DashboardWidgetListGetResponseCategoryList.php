<?php

namespace WlSdk\Wl\Report\Dashboard\Widget;

class DashboardWidgetListGetResponseCategoryList
{
    /**
     * Category sort order.
     *
     * @var int|null
     */
    public ?int $i_sort = null;

    /**
     * Category ID. One of {@link \WlSdk\RsReportCategorySid}.
     *
     * @var int|null
     * @see \WlSdk\RsReportCategorySid
     */
    public ?int $id_report_category = null;

    /**
     * Category title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_sort = isset($data['i_sort']) ? (int)$data['i_sort'] : null;
        $this->id_report_category = isset($data['id_report_category']) ? (int)$data['id_report_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
