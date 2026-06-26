<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Works with Class Pass visit statuses.
 *
 * Last used ID: 6.
 *
 * Values:
 * - 3 (`ATTENDED`): Client has attended the session.
 * - 2 (`CANCELLED`): Client has cancelled the reservation in time and without penalty.
 * - 6 (`CLASS_CANCELLED`): Reservation is cancelled due to that class is cancelled.
 * - 1 (`ENROLLED`): Active reservation means that user is going to attend the session.
 * - 4 (`LATE_CANCELLED`): Client has cancelled his reservation too late.
 * - 5 (`MISSED`): Client has missed the session without cancellation.
 */
class ReservationStatusSid
{
    /** Client has attended the session. */
    public const ATTENDED = 3;

    /** Client has cancelled the reservation in time and without penalty. */
    public const CANCELLED = 2;

    /** Reservation is cancelled due to that class is cancelled. */
    public const CLASS_CANCELLED = 6;

    /** Active reservation means that user is going to attend the session. */
    public const ENROLLED = 1;

    /** Client has cancelled his reservation too late. */
    public const LATE_CANCELLED = 4;

    /** Client has missed the session without cancellation. */
    public const MISSED = 5;
}
