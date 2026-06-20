<?php
namespace WlSdk\Core\Drive;

/**
 * List of image types.
 * 
 * Values:
 * - 4 (`BMP`): Bmp image.
 * - 1 (`GIF`): Gif image.
 * - 2 (`JPEG`): Jpeg image.
 * - 3 (`PNG`): Png image.
 */
enum DriveTypeSid: int
{
    case BMP = 4;
    case GIF = 1;
    case JPEG = 2;
    case PNG = 3;
}
