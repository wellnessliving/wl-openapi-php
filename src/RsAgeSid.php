<?php
namespace WlSdk;

/**
 * List of ages, which are suitable for visiting this location.
 * 
 * Last ID: 5.
 * 
 * Values:
 * - 5 (`ADAPTIVE`): An Adaptive / Inclusive Programs.
 * - 2 (`ADULT`): An adult.
 * - 1 (`KID`): A kid.
 * - 4 (`NATAL`): Natal.
 * - 3 (`SENIOR`): Senior.
 */
enum RsAgeSid: int
{
    case ADAPTIVE = 5;
    case ADULT = 2;
    case KID = 1;
    case NATAL = 4;
    case SENIOR = 3;
}
