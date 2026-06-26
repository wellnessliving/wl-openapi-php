<?php

namespace WlSdk\Wl\Report\Background;

class GenerateReportPostRequest
{
    /**
     * Whether the report should be displayed in Generated reports.
     *
     * @var bool|null
     */
    public ?bool $is_need_show = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the report file generation.
     *
     * @var string|null
     */
    public ?string $k_report_accumulation = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_need_show' => $this->is_need_show,
            'k_business' => $this->k_business,
            'k_report_accumulation' => $this->k_report_accumulation,
            ],
            static fn ($v) => $v !== null
        );
    }
}
