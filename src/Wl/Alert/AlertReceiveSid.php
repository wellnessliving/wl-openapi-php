<?php

namespace WlSdk\Wl\Alert;

/**
 * Determines whether the user wish to see all alerts, only their alerts, or none.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`ALERT_FOR_ALL`): The user will receive all alerts pertaining to that type of alert.
 * - 2 (`ALERT_FOR_ME`): The user will receive only alerts addressed to them (i.e. new service booking for a service
 * they run, service
 *   cancellation for a service they run, etc.)
 * - 3 (`NO_ALERT`): The user will not receive alerts pertaining to that type of alert.
 */
class AlertReceiveSid
{
    /** The user will receive all alerts pertaining to that type of alert. */
    public const ALERT_FOR_ALL = 1;

    /** The user will receive only alerts addressed to them (i.e. new service booking for a service they run, service */
    public const ALERT_FOR_ME = 2;

    /** The user will not receive alerts pertaining to that type of alert. */
    public const NO_ALERT = 3;
}
