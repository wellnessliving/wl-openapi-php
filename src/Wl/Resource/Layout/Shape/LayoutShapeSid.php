<?php
namespace WlSdk\Wl\Resource\Layout\Shape;

/**
 * Types of the shapes.
 * 
 * Values:
 * - 2 (`CIRCLE`): Circles.
 * - 3 (`PIE`): Pies.
 * - 1 (`RECTANGLE`): Rectangles and squares.
 */
enum LayoutShapeSid: int
{
    case CIRCLE = 2;
    case PIE = 3;
    case RECTANGLE = 1;
}
