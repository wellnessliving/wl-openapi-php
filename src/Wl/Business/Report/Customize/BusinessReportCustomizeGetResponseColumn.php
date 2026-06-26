<?php

namespace WlSdk\Wl\Business\Report\Customize;

class BusinessReportCustomizeGetResponseColumn
{
    /**
     * Column name list of the hidden columns and available in the report. See RsReport::info().
     *
     * @var string[]|null
     */
    public ?array $a_hide = null;

    /**
     * Column name list of the visible columns and available in the report. See RsReport::info().
     *
     * @var string[]|null
     */
    public ?array $a_visible = null;

    public function __construct(array $data)
    {
        $this->a_hide = isset($data['a_hide']) ? (array)$data['a_hide'] : null;
        $this->a_visible = isset($data['a_visible']) ? (array)$data['a_visible'] : null;
    }
}
