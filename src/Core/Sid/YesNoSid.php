<?php

namespace WlSdk\Core\Sid;

/**
 * A list of two answers for any question: Yes or No.
 *
 * Values:
 * - 2 (`NO`): The answer is "no".
 * - 1 (`YES`): The answer is "yes".
 */
class YesNoSid
{
    /** The answer is "no". */
    public const NO = 2;

    /** The answer is "yes". */
    public const YES = 1;
}
