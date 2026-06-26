<?php

namespace WlSdk\Wl\Zoom;

/**
 * List of known notifications from zoom.
 *
 * Last used ID: 12
 *
 * Values:
 * - 2 (`MEETING_ENDED`): Notification thrown when meeting has been ended.
 * - 1 (`RECORDING_COMPLETED`): Notification thrown when meeting recording has been completed.
 * - 11 (`RECORDING_PAUSED`): Notification thrown when meeting recording has been paused.
 * - 12 (`RECORDING_RESUMED`): Notification thrown when meeting recording has been resumed.
 * - 10 (`URL_VALIDATION`): Url validation notification.
 * - 7 (`USER_ACTIVATED`): Notification thrown when user activated.
 * - 4 (`USER_CREATED`): Notification thrown when new user created.
 * - 8 (`USER_DEACTIVATED`): Notification thrown when user deactivated.
 * - 5 (`USER_DELETED`): Notification thrown when user deleted.
 * - 6 (`USER_DISASSOCIATED`): Notification thrown when user disassociated.
 * - 9 (`USER_SETTINGS_UPDATED`): Notification thrown when user settings updated.
 * - 3 (`USER_UPDATED`): Notification thrown when user edited.
 */
class ZoomApiEventSid
{
    /** Notification thrown when meeting has been ended. */
    public const MEETING_ENDED = 2;

    /** Notification thrown when meeting recording has been completed. */
    public const RECORDING_COMPLETED = 1;

    /** Notification thrown when meeting recording has been paused. */
    public const RECORDING_PAUSED = 11;

    /** Notification thrown when meeting recording has been resumed. */
    public const RECORDING_RESUMED = 12;

    /** Url validation notification. */
    public const URL_VALIDATION = 10;

    /** Notification thrown when user activated. */
    public const USER_ACTIVATED = 7;

    /** Notification thrown when new user created. */
    public const USER_CREATED = 4;

    /** Notification thrown when user deactivated. */
    public const USER_DEACTIVATED = 8;

    /** Notification thrown when user deleted. */
    public const USER_DELETED = 5;

    /** Notification thrown when user disassociated. */
    public const USER_DISASSOCIATED = 6;

    /** Notification thrown when user settings updated. */
    public const USER_SETTINGS_UPDATED = 9;

    /** Notification thrown when user edited. */
    public const USER_UPDATED = 3;
}
