<?php

namespace WlSdk\Wl\Business\RegionTravel;

/**
 * A list of statuses of travelling steps.
 *
 * Value of TravelStepSql.`id_step_status`.
 *
 * Values:
 * - 1 (`ACTIVE`): This step is now active.
 *
 *   The step may be transitioned to the following status:
 *
 *   * [TravelStepStatusSid::COMPLETE](#/components/schemas/Wl.Business.RegionTravel.TravelStepStatusSid) when this
 * step completes;
 *   * [TravelStepStatusSid::FAILURE](#/components/schemas/Wl.Business.RegionTravel.TravelStepStatusSid) in a case of
 * failure.
 * - 2 (`COMPLETE`): This step is now completed.
 *
 *   This is the final state.
 *   Travelling steps can not be transitioned anywhere from this status.
 * - 3 (`FAILURE`): This step has failed.
 *
 *   Failed steps require manual intervention to continue.
 *   Which specific intervention is required entirely depends on the step.
 *
 *   The step may be transitioned to the following status:
 *
 *   * [TravelStepStatusSid::ACTIVE](#/components/schemas/Wl.Business.RegionTravel.TravelStepStatusSid) when this step
 * continues execution;
 *   * [TravelStepStatusSid::COMPLETE](#/components/schemas/Wl.Business.RegionTravel.TravelStepStatusSid) if it is
 * identified that this step has completed successfully.
 * - 4 (`SCHEDULED`): This step is scheduled and has not yet started.
 *
 *   All steps are created in this status.
 *
 *   The step may be transitioned to the following status:
 *
 *   * [TravelStepStatusSid::ACTIVE](#/components/schemas/Wl.Business.RegionTravel.TravelStepStatusSid) when this step
 * starts;
 *   * [TravelStepStatusSid::COMPLETE](#/components/schemas/Wl.Business.RegionTravel.TravelStepStatusSid) when this
 * step completes successfully;
 *   * [TravelStepStatusSid::FAILURE](#/components/schemas/Wl.Business.RegionTravel.TravelStepStatusSid) when this step
 * stops due to a failure.
 */
class TravelStepStatusSid
{
    /** This step is now active. */
    public const ACTIVE = 1;

    /** This step is now completed. */
    public const COMPLETE = 2;

    /** This step has failed. */
    public const FAILURE = 3;

    /** This step is scheduled and has not yet started. */
    public const SCHEDULED = 4;
}
