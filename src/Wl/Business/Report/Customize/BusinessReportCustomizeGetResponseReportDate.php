<?php

namespace WlSdk\Wl\Business\Report\Customize;

class BusinessReportCustomizeGetResponseReportDate
{
    /**
     * Whether the report date is selected.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Report date SID. One of the {@link \WlSdk\RsReportDateSid} constants.
     *
     * @var string|null
     */
    public ?string $sid_report_date = null;

    /**
     * Title of the report date.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->sid_report_date = isset($data['sid_report_date']) ? (string)$data['sid_report_date'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
