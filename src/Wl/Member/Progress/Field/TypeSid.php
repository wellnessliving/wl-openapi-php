<?php
namespace WlSdk\Wl\Member\Progress\Field;

/**
 * Possible types of the progress fields values.
 * 
 * Lase used id: 5.
 * 
 * Values:
 * - 2 (`DECIMAL`): Value is decimal.
 * - 5 (`IMAGE`): Value is image.
 * - 3 (`PERCENTAGE`): Value is percentage.
 * - 4 (`STRING`): Value is string.
 * - 1 (`WHOLE_NUMBER`): Value is whole number.
 */
enum TypeSid: int
{
    case DECIMAL = 2;
    case IMAGE = 5;
    case PERCENTAGE = 3;
    case STRING = 4;
    case WHOLE_NUMBER = 1;
}
