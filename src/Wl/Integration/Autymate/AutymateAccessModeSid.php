<?php

namespace WlSdk\Wl\Integration\Autymate;

/**
 * List of modes used to access Autymate.
 *
 * Values:
 * - 1 (`ENROLL`): Access Autymate to create an initial enrollment.
 * - 2 (`VIEW`): Access Autymate to view the dashboard.
 */
class AutymateAccessModeSid
{
    /** Access Autymate to create an initial enrollment. */
    public const ENROLL = 1;

    /** Access Autymate to view the dashboard. */
    public const VIEW = 2;
}
