<?php
namespace WlSdk;

/**
 * Class to process string identifiers for duration types
 * 
 * Last ID: 3.
 * 
 * Values:
 * - 2 (`DATE`): Specific date. Example, 2013-12-24.
 * - 3 (`ETERNAL`): No ending date.
 * - 1 (`PERIOD`): Examples: 12 days, 2 months, 2 hours etc.
 */
enum RsDurationTypeSid: int
{
    case DATE = 2;
    case ETERNAL = 3;
    case PERIOD = 1;
}
