<?php
namespace WlSdk\Wl\Visit\Note\Sid;

/**
 * A list of types of visit note.
 * 
 * Values:
 * - 2 (`QUICK`): The usual quick accompanying note for the customer visit.
 * - 1 (`SOAP`): Accompanying medical note for the customer visit.
 */
class NoteSid
{
    /** The usual quick accompanying note for the customer visit. */
    const QUICK = 2;
    /** Accompanying medical note for the customer visit. */
    const SOAP = 1;
}
