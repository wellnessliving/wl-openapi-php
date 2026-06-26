<?php

namespace WlSdk\Wl\Report;

class InfoGetRequest
{
    /**
     * Report ID. One of {@link \WlSdk\RsReportSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsReportSid
     */
    public ?int $id_report = null;

    /**
     * ID of business for which report must be generated. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_report' => $this->id_report,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
