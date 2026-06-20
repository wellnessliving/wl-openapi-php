<?php
namespace WlSdk;

/**
 * A position of logo.
 * 
 * Values:
 * - 2 (`CENTER`): Logo located in the center.
 * - 1 (`LEFT`): Logo located on the left side.
 * - 3 (`RIGHT`): Logo located on the right side.
 */
enum RsBusinessDesignLogoPositionSid: int
{
    case CENTER = 2;
    case LEFT = 1;
    case RIGHT = 3;
}
