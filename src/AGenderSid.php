<?php
namespace WlSdk;

/**
 * String identifiers for gender.
 * 
 * Values:
 * - 2 (`FEMALE`): Female gender.
 * - 1 (`MALE`): Male gender.
 * - 3 (`UNDEFINED`): Gender is undefined in cases where the user preferred not to identify their gender.
 */
enum AGenderSid: int
{
    case FEMALE = 2;
    case MALE = 1;
    case UNDEFINED = 3;
}
