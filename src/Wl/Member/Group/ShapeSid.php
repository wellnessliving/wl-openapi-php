<?php
namespace WlSdk\Wl\Member\Group;

/**
 * Shapes of client group icons.
 * 
 * Last used ID: 7.
 * 
 * Values:
 * - 1 (`CIRCLE`): Circle.
 * - 2 (`HEXAGON`): Hexagon.
 * - 3 (`OVAL`): Oval.
 * - 4 (`PENTAGON`): Pentagon.
 * - 5 (`RECTANGLE`): Rectangle.
 * - 6 (`SQUARE`): Square.
 * - 7 (`STAR`): Star.
 */
enum ShapeSid: int
{
    case CIRCLE = 1;
    case HEXAGON = 2;
    case OVAL = 3;
    case PENTAGON = 4;
    case RECTANGLE = 5;
    case SQUARE = 6;
    case STAR = 7;
}
