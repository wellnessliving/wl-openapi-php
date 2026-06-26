<?php

namespace WlSdk\Core\Sms\A2p;

/**
 * Business registration identifiers for A2P10DLC registration.
 *
 * Last used id: 3.
 *
 * Values:
 * - 1 (`DUNS`): DUNS Number (Dun & Bradstreet).
 * - 2 (`EIN`): Employer Identification Number (EIN).
 * - 3 (`OTHER`): Other.
 */
class BusinessRegistrationIdentifierSid
{
    /** DUNS Number (Dun & Bradstreet). */
    public const DUNS = 1;

    /** Employer Identification Number (EIN). */
    public const EIN = 2;

    /** Other. */
    public const OTHER = 3;
}
