<?php
namespace WlSdk\Wl\Reception\Application;

/**
 * Define colors of notice messages.
 * 
 * Describes the connotation behind messages. An available balance notice has a positive connotation and should be
 * displayed in a different color from notices of an expiring credit card or pass, which are negative.
 * 
 * Last ID: 4.
 * 
 * Values:
 * - 1 (`BLUE`): Default for neutral, informative messages. Displayed in blue.
 * - 2 (`GREEN`): Positive messages. Displayed in green.
 * - 3 (`ORANGE`): Mild negative messages to warn the user. Displayed in orange.
 * - 4 (`RED`): Negative messages with strong importance or urgency. Displayed in red.
 */
class MemberInfoColorSid
{
    /** Default for neutral, informative messages. Displayed in blue. */
    const BLUE = 1;
    /** Positive messages. Displayed in green. */
    const GREEN = 2;
    /** Mild negative messages to warn the user. Displayed in orange. */
    const ORANGE = 3;
    /** Negative messages with strong importance or urgency. Displayed in red. */
    const RED = 4;
}
