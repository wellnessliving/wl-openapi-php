<?php
namespace WlSdk;

/**
 * String identifiers for tax type.
 * 
 * Values:
 * - 1 (`FLAT`): Fixed type.
 * - 2 (`PERCENT`): Percent type.
 */
enum RsCommissionTypeSid: int
{
    case FLAT = 1;
    case PERCENT = 2;
}
