<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report;

/**
 * Response from GET
 */
class ReportQueryColumnMetaGetResponse
{
    /**
     * Parsed action schema for the report row menu, or empty array when no actions are configured.
     *
     * Populated from the `json_actions` column of ReportQuerySql
     *  via QueryEngineActionConfig::parse().
     * Each element describes one action visible in the 3-dot row menu:
     *
     * @var ReportQueryColumnMetaGetResponseActionSchema|null
     */
    public ?ReportQueryColumnMetaGetResponseActionSchema $a_action_schema = null;

    /**
     * Active column metadata. One entry per SELECT-clause column, in SELECT order.
     *
     * Each entry:
     *
     * Empty array if the registry record is missing, inactive, or the SQL cannot be parsed.
     *
     * @var ReportQueryColumnMetaGetResponseColumn|null
     */
    public ?ReportQueryColumnMetaGetResponseColumn $a_column = null;

    /**
     * Names of `@placeholder` variables found in the WHERE clause, in order of appearance.
     *
     * Excludes:
     * - Context-injected placeholders (those whose
     *    {@link \WlSdk\Thoth\ReportCore\QueryEngine\Placeholder\QueryEnginePlaceholderAbstract}
     *    equals {@link \WlSdk\Thoth\ReportCore\QueryEngine\Placeholder\QueryEnginePlaceholderAbstract}),
     *    e.g. `@business`, `@actor`, `@dl_end`.
     * - Date-filter placeholders (`@dl_start`, `@dl_end`): already surfaced via `has_date_filter`
     *    and rendered by the dedicated date picker widget, not as generic text inputs.
     *
     * Unregistered placeholder names (not in the registry) are included as-is - the SPA renders
     *  a generic text input for them as a fallback.
     * Empty array when there are no user-facing placeholders or the SQL has no WHERE clause.
     *
     * @var int[]|null
     */
    public ?array $a_placeholder = null;

    /**
     * Parsed totals configuration loaded from
     *  the `json_totals` column of ReportQuerySql.
     * One entry per total card, in the order they appear in `json_totals`.
     * Empty array when no totals are configured.
     *
     * Each entry:
     *
     * @var ReportQueryColumnMetaGetResponseTotalsConfig|null
     */
    public ?ReportQueryColumnMetaGetResponseTotalsConfig $a_totals_config = null;

    /**
     * `true` if the SQL references `dl_start` or `dl_end` (with `@` at the beginning) placeholders (i.e. it wants
     * date
     *  filtering); `false` otherwise. Drives date-filter widget visibility on the SPA side.
     *
     * @var bool|null
     */
    public ?bool $has_date_filter = null;

    /**
     * Human-readable title of the report instance (from the registry record).
     * Empty string when the record is missing or inactive.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_action_schema = isset($data['a_action_schema']) ? new ReportQueryColumnMetaGetResponseActionSchema((array)$data['a_action_schema']) : null;
        $this->a_column = isset($data['a_column']) ? new ReportQueryColumnMetaGetResponseColumn((array)$data['a_column']) : null;
        $this->a_placeholder = isset($data['a_placeholder']) ? (array)$data['a_placeholder'] : null;
        $this->a_totals_config = isset($data['a_totals_config']) ? new ReportQueryColumnMetaGetResponseTotalsConfig((array)$data['a_totals_config']) : null;
        $this->has_date_filter = isset($data['has_date_filter']) ? (bool)$data['has_date_filter'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
