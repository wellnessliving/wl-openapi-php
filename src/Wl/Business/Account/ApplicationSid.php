<?php

namespace WlSdk\Wl\Business\Account;

/**
 * Possible accounts for customisation Single Page Application in the system.
 *
 * Each account has price and give an access to set of features.
 *
 * Last ID: 4.
 *
 * Values:
 * - 1 (`NONE`): Application without customisations.
 * - 2 (`PRO`): Professional edition.
 * - 4 (`WHITE`): White label edition.
 */
class ApplicationSid
{
    /** Application without customisations. */
    public const NONE = 1;

    /** Professional edition. */
    public const PRO = 2;

    /** White label edition. */
    public const WHITE = 4;
}
