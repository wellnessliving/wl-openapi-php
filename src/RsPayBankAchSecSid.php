<?php

namespace WlSdk;

/**
 * A list of SEC codes which can be chosen.
 *
 * Values:
 * - 4 (`CCD`): Corporate bank account.
 * - 2 (`PPD`): Prearranged Payment & Deposit.
 * - 3 (`TEL`): Telephone Initiated Entry.
 * - 1 (`WEB`): Web Initiated Entry.
 */
class RsPayBankAchSecSid
{
    /** Corporate bank account. */
    public const CCD = 4;

    /** Prearranged Payment & Deposit. */
    public const PPD = 2;

    /** Telephone Initiated Entry. */
    public const TEL = 3;

    /** Web Initiated Entry. */
    public const WEB = 1;
}
