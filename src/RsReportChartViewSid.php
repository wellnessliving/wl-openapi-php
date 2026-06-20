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
enum RsReportChartViewSid: int
{
    case AREA = 2;
    case COLUMN = 1;
    case DONUT = 5;
    case LINE = 3;
    case YEAR_COLUMN = 4;
}
