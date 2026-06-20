<?php
namespace WlSdk\Wl\Integration\Autymate;

/**
 * List of modes used to access Autymate.
 * 
 * Values:
 * - 1 (`ENROLL`): Access Autymate to create an initial enrollment.
 * - 2 (`VIEW`): Access Autymate to view the dashboard.
 */
enum AutymateAccessModeSid: int
{
    case ENROLL = 1;
    case VIEW = 2;
}
