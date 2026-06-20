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
enum GenderSid: int
{
    case FEMALE = 2;
    case MALE = 1;
    case UNDEFINED = 3;
}
