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
enum MemberInfoColorSid: int
{
    case BLUE = 1;
    case GREEN = 2;
    case ORANGE = 3;
    case RED = 4;
}
