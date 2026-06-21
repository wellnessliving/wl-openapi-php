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
class TypeSid
{
    /** Value is decimal. */
    public const DECIMAL = 2;

    /** Value is image. */
    public const IMAGE = 5;

    /** Value is percentage. */
    public const PERCENTAGE = 3;

    /** Value is string. */
    public const STRING = 4;

    /** Value is whole number. */
    public const WHOLE_NUMBER = 1;
}
