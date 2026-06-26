<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport;

class AccountHistoryReportInfoGetRequest
{
    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Client user key. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_client' => $this->uid_client,
            ],
            static fn ($v) => $v !== null
        );
    }
}
