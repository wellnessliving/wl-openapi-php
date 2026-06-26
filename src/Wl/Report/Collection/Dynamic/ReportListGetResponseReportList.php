<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

class ReportListGetResponseReportList
{
    /**
     * Position of the report in the list of available collection reports. Always 0 in this method.
     *
     * @var int|null
     */
    public ?int $i_position = null;

    /**
     * Report ID, one of {@link \WlSdk\RsReportSid}.
     *
     * @var int|null
     * @see \WlSdk\RsReportSid
     */
    public ?int $id_report = null;

    /**
     * Report title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_position = isset($data['i_position']) ? (int)$data['i_position'] : null;
        $this->id_report = isset($data['id_report']) ? (int)$data['id_report'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
