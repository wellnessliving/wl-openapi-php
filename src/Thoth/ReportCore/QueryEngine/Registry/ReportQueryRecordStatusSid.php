<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Registry;

/**
 * Status filter for ReportQueryModel::selectList().
 *
 * Controls which records are included in the result based on their `is_active` flag.
 *
 * Values:
 * - 1 (`ACTIVE`): Only active records (`is_active = 1`).
 * - 2 (`ALL`): All records regardless of status.
 * - 3 (`INACTIVE`): Only inactive records (`is_active = 0`).
 */
class ReportQueryRecordStatusSid
{
    /** Only active records (`is_active = 1`). */
    public const ACTIVE = 1;

    /** All records regardless of status. */
    public const ALL = 2;

    /** Only inactive records (`is_active = 0`). */
    public const INACTIVE = 3;
}
