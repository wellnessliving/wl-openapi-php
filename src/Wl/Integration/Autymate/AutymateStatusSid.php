<?php
namespace WlSdk\Wl\Integration\Autymate;

/**
 * List of statuses of an Autymate enrollment notification.
 * 
 * Values:
 * - 1 (`ACTIVE`): Autymation enrollment is active.
 * - 2 (`INACTIVE`): Autymation enrollment is no longer active.
 */
class AutymateStatusSid
{
    /** Autymation enrollment is active. */
    const ACTIVE = 1;
    /** Autymation enrollment is no longer active. */
    const INACTIVE = 2;
}
