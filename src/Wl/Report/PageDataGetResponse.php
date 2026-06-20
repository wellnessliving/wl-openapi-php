<?php
namespace WlSdk\Wl\Report;

/**
 * Response from GET
 */
class PageDataGetResponse
{
    /**
     * List of the reports contents. Key is the report id from [RsReportSid](#/components/schemas/RsReportSid),
     * value is report contents.
     * Contents can vary based on the report that's loaded.
     *
     * @var array[]|null
     */
    public ?array $a_data = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? (array)$data['a_data'] : null;
    }
}
