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
class MeasurementSid
{
    /** Value in beats per minutes. */
    const BEATS_PER_MINUTE = 7;
    /** Value in centimeters. */
    const CENTIMETRES = 1;
    /** Value in feet. */
    const FEET = 3;
    /** Value in feet and inches. */
    const FEET_AND_INCHES = 11;
    /** Value in grams. */
    const GRAMS = 9;
    /** Value in inches. */
    const INCHES = 4;
    /** Value in kilograms. */
    const KILOGRAMS = 5;
    /** Value in metres. */
    const METRES = 2;
    /** Value in metres and centimetres. */
    const METRES_AND_CENTIMETRES = 12;
    /** Value in mmHG. */
    const MMHG = 8;
    /** Value in percentages. */
    const PERCENTAGES = 10;
    /** Value in pounds. */
    const POUNDS = 6;
}
