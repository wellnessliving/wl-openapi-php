<?php

namespace WlSdk\Wl\Classes\Edit;

/**
 * Type of the event, which defines how clients book it and how they pay for it.
 *
 * Values:
 * - 2 (`BLOCK`): Clients book the event once and attend every session in the schedule.
 * - 1 (`NON_BLOCK`): Clients pick which sessions to book and can pay per session.
 * - 3 (`TICKETED`): Tickets are sold for a set number of seats and are paid up front. Anyone can buy a ticket,
 *   no account is needed, and every ticket is a QR code that staff scan at the door.
 */
class EventTypeEnum
{
    /** Clients book the event once and attend every session in the schedule. */
    public const BLOCK = 2;

    /** Clients pick which sessions to book and can pay per session. */
    public const NON_BLOCK = 1;

    /** Tickets are sold for a set number of seats and are paid up front. Anyone can buy a ticket, */
    public const TICKETED = 3;
}
