<?php

namespace WlSdk;

/**
 * Class describes reports types (table, chart, gauge).
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`CHART`): Chart.
 * - 2 (`GAUGE`): Gauge.
 * - 3 (`TABLE`): Table.
 * - 4 (`YOY_CHART`): Year-over-year chart.
 */
class RsReportTypeSid
{
    /** Chart. */
    public const CHART = 1;

    /** Gauge. */
    public const GAUGE = 2;

    /** Table. */
    public const TABLE = 3;

    /** Year-over-year chart. */
    public const YOY_CHART = 4;
}
