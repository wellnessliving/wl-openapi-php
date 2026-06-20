<?php
namespace WlSdk;

/**
 * A list of service price types.
 * 
 * Values:
 * - 1 (`FIXED`): Fixed price.
 * - 2 (`FREE`): No need to pay.
 * - 4 (`HIDE`): Hide price.
 * - 3 (`VARIES`): Various price.
 */
enum RsServicePriceSid: int
{
    case FIXED = 1;
    case FREE = 2;
    case HIDE = 4;
    case VARIES = 3;
}
