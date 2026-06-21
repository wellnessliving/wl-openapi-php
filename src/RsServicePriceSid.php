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
    public const FIXED = 1;

    /** No need to pay. */
    public const FREE = 2;

    /** Hide price. */
    public const HIDE = 4;

    /** Various price. */
    public const VARIES = 3;
}
