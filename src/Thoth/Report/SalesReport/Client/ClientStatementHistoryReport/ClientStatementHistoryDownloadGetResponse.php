<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

/**
 * Response from GET
 */
class ClientStatementHistoryDownloadGetResponse
{
    /**
     * Base64-encoded PDF binary content.
     *
     * Decode on the client side and use as a Blob URL for file download.
     *
     * @var string|null
     */
    public ?string $s_pdf_base64 = null;

    /**
     * Suggested file name for the downloaded PDF.
     *
     * @var string|null
     */
    public ?string $text_filename = null;

    public function __construct(array $data)
    {
        $this->s_pdf_base64 = isset($data['s_pdf_base64']) ? (string)$data['s_pdf_base64'] : null;
        $this->text_filename = isset($data['text_filename']) ? (string)$data['text_filename'] : null;
    }
}
