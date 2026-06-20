<?php
namespace WlSdk\Wl\Profile\Attach;

/**
 * List of file extensions.
 * 
 * Last used ID: 2.
 * 
 * Values:
 * - 1 (`IMAGE`): Image file.
 * - 2 (`PDF`): Pdf file.
 */
enum AttachPreviewSid: int
{
    case IMAGE = 1;
    case PDF = 2;
}
