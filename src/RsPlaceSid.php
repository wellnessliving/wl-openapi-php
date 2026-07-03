<?php

namespace WlSdk;

/**
 * The list of available modes.
 *
 * Values:
 * - 2 (`BACKEND`): Backend mode.
 * - 5 (`BACKGROUND`): The script is executed in the background (like an asynchronous task, regular task or a cron
 * method).
 * - 3 (`DIRECTORY`): Directory pages.
 * - 1 (`FRONTEND`): Default frontend mode. All pages not in backend mode except microsite and directory pages.
 * - 4 (`MICROSITE`): Microsite pages.
 */
class RsPlaceSid
{
    /** Backend mode. */
    public const BACKEND = 2;

    /** The script is executed in the background (like an asynchronous task, regular task or a cron method). */
    public const BACKGROUND = 5;

    /** Directory pages. */
    public const DIRECTORY = 3;

    /** Default frontend mode. All pages not in backend mode except microsite and directory pages. */
    public const FRONTEND = 1;

    /** Microsite pages. */
    public const MICROSITE = 4;
}
