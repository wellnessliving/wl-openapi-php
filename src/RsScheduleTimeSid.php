<?php
namespace WlSdk;

/**
 * Day time periods.
 * 
 * Values:
 * - 2 (`AFTERNOON`): Afternoon.
 * - 3 (`EVENING`): Evening.
 * - 1 (`MORNING`): Morning.
 */
enum RsScheduleTimeSid: int
{
    case AFTERNOON = 2;
    case EVENING = 3;
    case MORNING = 1;
}
