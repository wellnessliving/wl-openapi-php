<?php

namespace WlSdk\Wl\Quiz\Response;

/**
 * Response from GET
 */
class ReportPostponeGetResponse
{
    /**
     * Quiz response report.
     *
     * @var string|null
     */
    public ?string $html_response_report = null;

    public function __construct(array $data)
    {
        $this->html_response_report = isset($data['html_response_report']) ? (string)$data['html_response_report'] : null;
    }
}
