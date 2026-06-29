<?php

namespace WlSdk;

/**
 * A list of bank account types.
 *
 * Values:
 * - 2 (`ACH`): Bank account for ACH direct bank transactions. USA-specific system.
 * - 1 (`CARD`): A credit card.
 * - 3 (`DIRECT_ENTRY`): Bank account for Direct Entry direct bank transactions.  Australian-specific system.
 */
class RsPayBankSid
{
    /** Bank account for ACH direct bank transactions. USA-specific system. */
    public const ACH = 2;

    /** A credit card. */
    public const CARD = 1;

    /** Bank account for Direct Entry direct bank transactions.  Australian-specific system. */
    public const DIRECT_ENTRY = 3;
}
