<?php

namespace WlSdk\Thoth\ReportCore\Generator;

/**
 * Response from GET
 */
class FilterGetResponse
{
    /**
     * Filter that is applied to the report.
     *
     * `array` temporary solution.
     *
     * @var string|null
     */
    public ?string $json_filter = null;

    public function __construct(array $data)
    {
        $this->json_filter = isset($data['json_filter']) ? (string)$data['json_filter'] : null;
    }
}
