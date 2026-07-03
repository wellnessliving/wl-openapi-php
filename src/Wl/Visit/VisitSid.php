<?php

namespace WlSdk\Wl\Visit;

/**
 * Possible states of the visit: book, attended, cancelled, etc.
 *
 * Last used ID: 8.
 *
 * Values:
 * - 3 (`ATTEND`): Client has attended the session.
 * - 1 (`BOOK`): Active reservation means that user is going to attend the session.
 * - 6 (`CANCEL`): Client has cancelled the reservation in time and without penalty.
 * - 4 (`PENALTY`): Client has cancelled his reservation too late.
 * - 7 (`PENDING`): This state means that visit is registered, but it is unknown is it {@link \WlSdk\Wl\Visit\VisitSid}
 *   or {@link \WlSdk\Wl\Visit\VisitSid} or {@link \WlSdk\Wl\Visit\VisitSid} but definitely one of these states.
 *
 *   The real type of this visit must be set manually by staff.
 *   Status can be changed automatically to {@link \WlSdk\Wl\Visit\VisitSid}.
 * - 8 (`REMOVE`): Visit was removed.
 *   Visits with this status are not shown anywhere in system, but still are saved in database.
 * - 5 (`TRUANCY`): Client has missed the session without cancellation.
 * - 2 (`WAIT`): Reservation in a wait list means that user is going to attend the session if someone will cancel his
 * reservation.
 */
class VisitSid
{
    /** Client has attended the session. */
    public const ATTEND = 3;

    /** Active reservation means that user is going to attend the session. */
    public const BOOK = 1;

    /** Client has cancelled the reservation in time and without penalty. */
    public const CANCEL = 6;

    /** Client has cancelled his reservation too late. */
    public const PENALTY = 4;

    /** This state means that visit is registered, but it is unknown is it {@link \WlSdk\Wl\Visit\VisitSid} */
    public const PENDING = 7;

    /** Visit was removed. */
    public const REMOVE = 8;

    /** Client has missed the session without cancellation. */
    public const TRUANCY = 5;

    /** Reservation in a wait list means that user is going to attend the session if someone will cancel his reservation. */
    public const WAIT = 2;
}
