<?php

namespace WlSdk\Wl\Business\Account;

/**
 * Possible website subscription plans.
 *
 * Each plan has price and may give an access to set of features.
 *
 * Last ID: 5.
 *
 * Values:
 * - 4 (`BASIC`): Basic edition.
 * - 3 (`ENTERPRISE`): Enterprise edition.
 * - 1 (`NONE`): No payments considered.
 * - 5 (`PREMIUM`): Premium edition.
 * - 2 (`PRO`): Professional edition.
 */
class WebsiteSid
{
    /** Basic edition. */
    public const BASIC = 4;

    /** Enterprise edition. */
    public const ENTERPRISE = 3;

    /** No payments considered. */
    public const NONE = 1;

    /** Premium edition. */
    public const PREMIUM = 5;

    /** Professional edition. */
    public const PRO = 2;
}
