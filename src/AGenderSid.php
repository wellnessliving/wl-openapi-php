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
class AGenderSid
{
    /** Female gender. */
    const FEMALE = 2;
    /** Male gender. */
    const MALE = 1;
    /** Gender is undefined in cases where the user preferred not to identify their gender. */
    const UNDEFINED = 3;
}
