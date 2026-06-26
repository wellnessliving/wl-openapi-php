<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report;

class ReportQueryColumnMetaGetResponseTotalsConfig
{
    /**
     * Aggregation function: 'AVG', 'COUNT', 'MAX', 'MIN', or 'SUM'.
     *
     * @var string|null
     */
    public ?string $s_function = null;

    /**
     * Human-readable label for the summary card.
     *
     * @var string|null
     */
    public ?string $text_label = null;

    /**
     * Clean column alias to aggregate. `null` for COUNT-all.
     *
     * @var string|null
     */
    public ?string $s_alias = null;

    public function __construct(array $data)
    {
        $this->s_function = isset($data['s_function']) ? (string)$data['s_function'] : null;
        $this->text_label = isset($data['text_label']) ? (string)$data['text_label'] : null;
        $this->s_alias = isset($data['s_alias']) ? (string)$data['s_alias'] : null;
    }
}
