<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQueryListGetRequest
{
    /**
     * Status filter. One of {@link \WlSdk\Thoth\ReportCore\QueryEngine\Registry\ReportQueryRecordStatusSid}
     * constants.
     *
     * @var int|null
     * @see \WlSdk\Thoth\ReportCore\QueryEngine\Registry\ReportQueryRecordStatusSid
     */
    public ?int $id_record_status = null;

    /**
     * Business key. `'0'` to list system-level reports.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_record_status' => $this->id_record_status,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
