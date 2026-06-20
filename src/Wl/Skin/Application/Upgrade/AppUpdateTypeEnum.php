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
class AppUpdateTypeEnum
{
    /** Patch update (1) - for small bug fixes or improvements. */ */
    const PATCH = 1;
    /** Minor update (2) - for backward-compatible feature additions. */ */
    const MINOR = 2;
    /** Major update (3) - for incompatible API changes or major new features. */ */
    const MAJOR = 3;
}
