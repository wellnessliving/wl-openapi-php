<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

class ClientStatementHistoryEmailPostRequest
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

    /**
     * Email address to deliver the statement to.
     *
     * When empty, the client's profile email address is used.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_statement' => $this->k_statement,
            'text_mail' => $this->text_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
