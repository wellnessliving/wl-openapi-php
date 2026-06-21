<?php

namespace WlSdk;

/**
 * Describes charts types (bar, line, area) and chart modes.
 *
 * Values:
 * - 2 (`AREA`): Area chart.
 * - 1 (`COLUMN`): Column chart.
 * - 5 (`DONUT`): Donut chart.
 * - 3 (`LINE`): Line chart.
 * - 4 (`YEAR_COLUMN`): Year-by-year comparisons in the column chart.
 */
class RsReportChartViewSid
{
    /** Area chart. */
    public const AREA = 2;

    /** Column chart. */
    public const COLUMN = 1;

    /** Donut chart. */
    public const DONUT = 5;

    /** Line chart. */
    public const LINE = 3;

    /** Year-by-year comparisons in the column chart. */
    public const YEAR_COLUMN = 4;
}
