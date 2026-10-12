<?php

namespace WlSdk\Wl\Classes\Edit;

/**
 * The way the end of the early bird period is specified for the event.
 *
 * Values:
 * - 2 (`BEFORE`): The period ends a certain amount of time before the event starts.
 * - 1 (`DATE`): The period ends on the date.
 */
class EarlyPeriodEnum
{
    /** The period ends a certain amount of time before the event starts. */
    public const BEFORE = 2;

    /** The period ends on the date. */
    public const DATE = 1;
}
