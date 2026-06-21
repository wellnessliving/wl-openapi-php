<?php

namespace WlSdk\Wl\Gender;

/**
 * Class to work with gender string identifiers.
 *
 * Values:
 * - 2 (`FEMALE`): Female gender.
 * - 1 (`MALE`): Male gender.
 * - 3 (`UNDEFINED`): Gender is undefined in cases where the user preferred not to identify their gender.
 */
class GenderSid
{
    /** Female gender. */
    public const FEMALE = 2;

    /** Male gender. */
    public const MALE = 1;

    /** Gender is undefined in cases where the user preferred not to identify their gender. */
    public const UNDEFINED = 3;
}
