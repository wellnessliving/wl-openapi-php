<?php

namespace WlSdk\Wl\Field;

/**
 * Level at which a client profile field is asked at a given collection entry point.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`DONT_ASK`): The field is not asked at this entry point.
 * - 2 (`OPTIONAL`): The field is asked, but a value is not required.
 * - 3 (`REQUIRED`): The field is asked, and a value is required.
 */
class FieldLevelEnum
{
    /** The field is not asked at this entry point. */
    public const DONT_ASK = 1;

    /** The field is asked, but a value is not required. */
    public const OPTIONAL = 2;

    /** The field is asked, and a value is required. */
    public const REQUIRED = 3;
}
