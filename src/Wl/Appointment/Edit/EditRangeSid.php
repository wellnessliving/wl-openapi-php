<?php

namespace WlSdk\Wl\Appointment\Edit;

/**
 * Different types of range to apply rescheduling. Important for recurring appointments that
 * can be changed only once, per date range or forward from current date.
 *
 * Values:
 * - 2 (`FORWARD`): Change all appointment from current one until the end of the recurring appointments.
 * - 1 (`ONCE`): Change only one appointment.
 * - 3 (`RANGE`): Change all appointments withing the given date range.
 */
class EditRangeSid
{
    /** Change all appointment from current one until the end of the recurring appointments. */
    public const FORWARD = 2;

    /** Change only one appointment. */
    public const ONCE = 1;

    /** Change all appointments withing the given date range. */
    public const RANGE = 3;
}
