<?php
namespace WlSdk;

/**
 * A style of logo.
 * 
 * Values:
 * - 1 (`HIDE`): Logo is invisible.
 * - 4 (`RECTANGLE`): Logo is a rectangle.
 * - 3 (`ROUND`): Logo is a round.
 * - 2 (`SQUARE`): Logo is a square.
 */
enum RsBusinessDesignLogoStyleSid: int
{
    case HIDE = 1;
    case RECTANGLE = 4;
    case ROUND = 3;
    case SQUARE = 2;
}
