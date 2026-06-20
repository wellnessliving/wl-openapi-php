<?php
namespace WlSdk\Wl\Integration\Autymate;

/**
 * List of statuses of an Autymate enrollment notification.
 * 
 * Values:
 * - 1 (`ACTIVE`): Autymation enrollment is active.
 * - 2 (`INACTIVE`): Autymation enrollment is no longer active.
 */
enum AutymateStatusSid: int
{
    case ACTIVE = 1;
    case INACTIVE = 2;
}
