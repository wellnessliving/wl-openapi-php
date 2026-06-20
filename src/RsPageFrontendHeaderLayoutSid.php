<?php
namespace WlSdk;

/**
 * List of layouts for client's header.
 * 
 * Values:
 * - 4 (`BOTTOM`): Logo is under the main menu.
 * - 1 (`LEFT`): Logo is in the left corner.
 * - 2 (`RIGHT`): Logo is in the right corner.
 * - 3 (`TOP`): Logo is above the main menu.
 */
enum RsPageFrontendHeaderLayoutSid: int
{
    case BOTTOM = 4;
    case LEFT = 1;
    case RIGHT = 2;
    case TOP = 3;
}
