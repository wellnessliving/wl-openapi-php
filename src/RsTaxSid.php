<?php
namespace WlSdk;

/**
 * Types of taxes.
 * 
 * Values:
 * - 2 (`PERCENT`): Tax is accounted based on percents.
 */
enum RsTaxSid: int
{
    case PERCENT = 2;
}
