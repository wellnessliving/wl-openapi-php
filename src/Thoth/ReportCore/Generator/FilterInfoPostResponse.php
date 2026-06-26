<?php

namespace WlSdk\Thoth\ReportCore\Generator;

/**
 * Response from POST
 */
class FilterInfoPostResponse
{
    /**
     * Additional filter field data.
     *
     * This array is gathered with data returned by ReportFilterFieldAbstract::data().
     *
     * @var array[]|null
     */
    public ?array $a_data = null;

    /**
     * A list of dynamic filter fields in this report.
     *
     * Copy of result of {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}.
     *
     * @var array[]|null
     */
    public $a_dynamic = null;

    /**
     * A list of hidden filter fields in this report.
     *
     * Each element is a ReportFilterFieldInfo::$s_name filter field name.
     *
     * @var string[]|null
     */
    public ?array $a_hide = null;

    /**
     * Warning list of the report.
     *
     * @var string[]|null
     */
    public ?array $a_message = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? (array)$data['a_data'] : null;
        $this->a_dynamic = $data['a_dynamic'] ?? null;
        $this->a_hide = isset($data['a_hide']) ? (array)$data['a_hide'] : null;
        $this->a_message = isset($data['a_message']) ? (array)$data['a_message'] : null;
    }
}
