<?php
namespace WlSdk;

/**
 * A list of client booking flow types.
 * 
 * 3 - is reserved for deprecated "advanced percent" that was combined with "flat advance" into "ADVANCE".
 * 
 * Last used ID: 6
 * 
 * Values:
 * - 4 (`ADVANCE`): Some part of the price is required. Type of the deposit can be flat or percentage.
 *   Type of the deposit depends on `is_deposit_percent`.
 *   Size of the deposit is specified in `f_deposit`
 * - 2 (`FULL`): Full payment is required.
 * - 1 (`NOTHING`): Nothing is required.
 *   Online Payment is optional.
 * - 6 (`OFFLINE`): Clients can book, but online purchase is not available.
 *   Clients can pay only when they visit.
 * - 5 (`ZERO`): Credit card authorisation without payment is required.
 */
class RsServiceRequireSid
{
    /** Some part of the price is required. Type of the deposit can be flat or percentage. */
    const ADVANCE = 4;
    /** Full payment is required. */
    const FULL = 2;
    /** Nothing is required. */
    const NOTHING = 1;
    /** Clients can book, but online purchase is not available. */
    const OFFLINE = 6;
    /** Credit card authorisation without payment is required. */
    const ZERO = 5;
}
