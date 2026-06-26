<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

class ClientStatementHistoryDownloadGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Statement primary key.
     *
     * @var string|null
     */
    public ?string $k_statement = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_statement' => $this->k_statement,
            ],
            static fn ($v) => $v !== null
        );
    }
}
