<?php

namespace WlSdk\Thoth\ProgressLog\Report;

/**
 * Response from GET
 */
class ProgressLogReportInfoGetResponse
{
    /**
     * List of available progress log chart metric fields.
     *
     * Each item is result of Field::getField() with additional information. Complete structure of each item:
     *
     * @var ProgressLogReportInfoGetResponseChartMetric[]|null
     */
    public ?array $a_chart_metric = null;

    /**
     * Whether specified actor can add a new transformation log measurement for the specified client.
     * `true` if they can, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_add_measurement = null;

    public function __construct(array $data)
    {
        $this->a_chart_metric = isset($data['a_chart_metric']) ? array_map(static fn ($item) => new ProgressLogReportInfoGetResponseChartMetric((array)$item), (array)$data['a_chart_metric']) : null;
        $this->can_add_measurement = isset($data['can_add_measurement']) ? (bool)$data['can_add_measurement'] : null;
    }
}
