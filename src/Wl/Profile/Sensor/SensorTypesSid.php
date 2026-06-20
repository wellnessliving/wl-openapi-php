<?php
namespace WlSdk\Wl\Profile\Sensor;

/**
 * List of sensor types.
 * 
 * Last ID: 1.
 * 
 * Values:
 * - 1 (`HEART_RATE`): Heart rate sensor.
 */
enum SensorTypesSid: int
{
    case HEART_RATE = 1;
}
