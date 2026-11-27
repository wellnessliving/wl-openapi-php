<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

class ClientStatementHistoryPreviewGetRequest
{
    /**
     * Business key.
     *
     * Required: `null` means that it was not passed, and the request is refused.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Statement key.
     *
     *
     * Required: `null` means that it was not passed, and the request is refused.
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
