<?php
namespace WlSdk\Core\Sid;

/**
 * A list of two answers for any question: Yes or No.
 * 
 * Values:
 * - 2 (`NO`): The answer is "no".
 * - 1 (`YES`): The answer is "yes".
 */
enum YesNoSid: int
{
    case NO = 2;
    case YES = 1;
}
