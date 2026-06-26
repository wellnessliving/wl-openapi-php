<?php

namespace WlSdk\Wl\Report\Background;

class GenerateReportDeleteRequest
{
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
            'k_business' => $this->k_business,
            'k_report_accumulation' => $this->k_report_accumulation,
            ],
            static fn ($v) => $v !== null
        );
    }
}
