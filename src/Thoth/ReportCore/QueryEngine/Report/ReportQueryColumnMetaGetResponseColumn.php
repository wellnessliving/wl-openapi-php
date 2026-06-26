<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report;

class ReportQueryColumnMetaGetResponseColumn
{
    /**
     * Clean column alias (format suffix stripped), matching the key used in
     *    `a_dynamic` and the
     *    `s_name` of the dynamic field registered by {@link
     * \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}.
     *    Example: `m_amount` for raw alias `m_amount.formatMoney`.
     *
     * @var string|null
     */
    public ?string $s_slot = null;

    /**
     * Human-readable column title (same value as `s_slot` unless a custom title is added later).
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Format hint extracted from the alias (`Money`, `Date`, ...); `null` if absent.
     *
     * @var string|null
     */
    public ?string $s_format = null;

    public function __construct(array $data)
    {
        $this->s_slot = isset($data['s_slot']) ? (string)$data['s_slot'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->s_format = isset($data['s_format']) ? (string)$data['s_format'] : null;
    }
}
