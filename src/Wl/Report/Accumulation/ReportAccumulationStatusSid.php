<?php

namespace WlSdk\Wl\Report\Accumulation;

/**
 * Status of the report accumulation.
 *
 * Last ID: 4.
 *
 * Values:
 * - 3 (`CANCELLED`): The report generation is being cancelled now.
 * - 2 (`COMPLETED`): Generation of the report is now completed.
 * - 4 (`ERROR`): Generating is finished with errors.
 * - 1 (`GENERATING`): The report is being generated now.
 * - 5 (`SAVING`): The report has been generated and should be saved.
 */
class ReportAccumulationStatusSid
{
    /** The report generation is being cancelled now. */
    public const CANCELLED = 3;

    /** Generation of the report is now completed. */
    public const COMPLETED = 2;

    /** Generating is finished with errors. */
    public const ERROR = 4;

    /** The report is being generated now. */
    public const GENERATING = 1;

    /** The report has been generated and should be saved. */
    public const SAVING = 5;
}
