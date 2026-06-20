<?php
namespace WlSdk\Wl\Member\Progress\Field;

/**
 * Possible measurement units of the progress fields values.
 * 
 * Values:
 * - 7 (`BEATS_PER_MINUTE`): Value in beats per minutes.
 * - 1 (`CENTIMETRES`): Value in centimeters.
 * - 3 (`FEET`): Value in feet.
 * - 11 (`FEET_AND_INCHES`): Value in feet and inches.
 * - 9 (`GRAMS`): Value in grams.
 * - 4 (`INCHES`): Value in inches.
 * - 5 (`KILOGRAMS`): Value in kilograms.
 * - 2 (`METRES`): Value in metres.
 * - 12 (`METRES_AND_CENTIMETRES`): Value in metres and centimetres.
 * - 8 (`MMHG`): Value in mmHG.
 * - 10 (`PERCENTAGES`): Value in percentages.
 * - 6 (`POUNDS`): Value in pounds.
 */
enum MeasurementSid: int
{
    case BEATS_PER_MINUTE = 7;
    case CENTIMETRES = 1;
    case FEET = 3;
    case FEET_AND_INCHES = 11;
    case GRAMS = 9;
    case INCHES = 4;
    case KILOGRAMS = 5;
    case METRES = 2;
    case METRES_AND_CENTIMETRES = 12;
    case MMHG = 8;
    case PERCENTAGES = 10;
    case POUNDS = 6;
}
