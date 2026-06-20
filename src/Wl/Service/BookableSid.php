<?php
namespace WlSdk\Wl\Service;

/**
 * A list of bookable types.
 * 
 * Values:
 * - 1 (`ALL`): All users can book.
 * - 3 (`CUSTOM`): Only special client groups can book.
 * - 2 (`NONE`): Nobody can book.
 */
enum BookableSid: int
{
    case ALL = 1;
    case CUSTOM = 3;
    case NONE = 2;
}
