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
class RsServicePriceSid
{
    /** Fixed price. */
    const FIXED = 1;
    /** No need to pay. */
    const FREE = 2;
    /** Hide price. */
    const HIDE = 4;
    /** Various price. */
    const VARIES = 3;
}
