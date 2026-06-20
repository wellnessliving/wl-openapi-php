<?php
namespace WlSdk\Wl\Video;

/**
 * List of video types.
 * 
 * Last used ID: 2
 * 
 * Values:
 * - 2 (`EMBED`): Embedded video.
 * - 1 (`UPLOAD`): Uploaded video.
 */
enum VideoSourceSid: int
{
    case EMBED = 2;
    case UPLOAD = 1;
}
