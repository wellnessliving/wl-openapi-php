<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

/**
 * Response from GET
 */
class ClientStatementHistoryPreviewGetResponse
{
    /**
     * The complete HTML document of the statement, to be shown in an isolated frame.
     *
     * The styles are inline, the logo is embedded as a data URI, and there are no scripts, so the document loads
     * nothing from outside. The status badges of the transactions have no icon: they keep their colour and text.
     *
     * @var string|null
     */
    public ?string $html_statement = null;

    public function __construct(array $data)
    {
        $this->html_statement = isset($data['html_statement']) ? (string)$data['html_statement'] : null;
    }
}
