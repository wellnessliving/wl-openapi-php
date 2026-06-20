<?php

namespace WlSdk\Wl\Video\Watch;

/**
 * List sources of the view video.
 *
 * Last used ID: 4
 *
 * Values:
 * - 1 (`APP`): Video watched from application.
 * - 2 (`DIRECT_URL`): Video watched from direct URL.
 * - 3 (`FRONTEND`): Video watched from frontend.
 * - 4 (`UNDEFINED`): Source of watched is undefined.
 *
 *   Used for old videos.
 */
class WatchSourceSid
{
    /** Video watched from application. */
    public const APP = 1;

    /** Video watched from direct URL. */
    public const DIRECT_URL = 2;

    /** Video watched from frontend. */
    public const FRONTEND = 3;

    /** Source of watched is undefined. */
    public const UNDEFINED = 4;
}
