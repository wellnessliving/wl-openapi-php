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
 * - 7 (`PENDING`): This state means that visit is registered, but it is unknown is it
 * [VisitSid::ATTEND](#/components/schemas/Wl.Visit.VisitSid)
 *   or [VisitSid::TRUANCY](#/components/schemas/Wl.Visit.VisitSid) or
 * [VisitSid::PENALTY](#/components/schemas/Wl.Visit.VisitSid) but definitely one of these states.
 * 
 *   The real type of this visit must be set manually by staff.
 *   Status can be changed automatically to [VisitSid::ATTEND](#/components/schemas/Wl.Visit.VisitSid).
 * - 8 (`REMOVE`): Visit was removed.
 *   Visits with this status are not shown anywhere in system, but still are saved in database.
 * - 5 (`TRUANCY`): Client has missed the session without cancellation.
 * - 2 (`WAIT`): Reservation in a wait list means that user is going to attend the session if someone will cancel his
 * reservation.
 */
enum VisitSid: int
{
    case ATTEND = 3;
    case BOOK = 1;
    case CANCEL = 6;
    case PENALTY = 4;
    case PENDING = 7;
    case REMOVE = 8;
    case TRUANCY = 5;
    case WAIT = 2;
}
