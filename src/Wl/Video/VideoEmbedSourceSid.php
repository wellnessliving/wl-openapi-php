<?php
namespace WlSdk\Wl\Video;

/**
 * List of embed video sources.
 * 
 * Last used ID: 4
 * 
 * Values:
 * - 4 (`LES_MILLS`): Les Mills.
 * - 2 (`VIMEO`): Vimeo.
 * - 3 (`WISTIA`): Wistia.
 * - 1 (`YOUTUBE`): YouTube.
 */
enum VideoEmbedSourceSid: int
{
    case LES_MILLS = 4;
    case VIMEO = 2;
    case WISTIA = 3;
    case YOUTUBE = 1;
}
