<?php

namespace WlSdk;

/**
 * Possible ways to stop repeatable events.
 *
 * Values:
 * - 2 (`COUNT`): Stop after a certain number of repeats.
 * - 3 (`DATE`): Stop after a certain date. Including this date.
 * - 1 (`ETERNAL`): Eternal appointments. Such appointments are scheduled for one year
 *   and will be scheduled again every month.
 */
class RsRepeatEndSid
{
    /** Stop after a certain number of repeats. */
    public const COUNT = 2;

    /** Stop after a certain date. Including this date. */
    public const DATE = 3;

    /** Eternal appointments. Such appointments are scheduled for one year */
    public const ETERNAL = 1;
}
