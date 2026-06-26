<?php

namespace WlSdk;

/**
 * A list of account holder types which can be chosen.
 *
 * Values:
 * - 2 (`BUSINESS`): Account holder is a business.
 * - 1 (`PERSONAL`): Account holder is a person.
 */
class RsPayBankAchHolderSid
{
    /** Account holder is a business. */
    public const BUSINESS = 2;

    /** Account holder is a person. */
    public const PERSONAL = 1;
}
