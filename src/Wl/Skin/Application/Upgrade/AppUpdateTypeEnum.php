<?php
namespace WlSdk\Wl\Skin\Application\Upgrade;

/**
 * Enum for application update types used in Google Play and Apple Store releases.
 * 
 * Values:
 * - 1 (`PATCH`): Patch update (1) - for small bug fixes or improvements. */
 * - 2 (`MINOR`): Minor update (2) - for backward-compatible feature additions. */
 * - 3 (`MAJOR`): Major update (3) - for incompatible API changes or major new features. */
 */
enum AppUpdateTypeEnum: int
{
    case PATCH = 1;
    case MINOR = 2;
    case MAJOR = 3;
}
