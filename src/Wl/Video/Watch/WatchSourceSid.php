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
enum WatchSourceSid: int
{
    case APP = 1;
    case DIRECT_URL = 2;
    case FRONTEND = 3;
    case UNDEFINED = 4;
}
