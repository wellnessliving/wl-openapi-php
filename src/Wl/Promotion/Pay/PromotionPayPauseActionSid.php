<?php

namespace WlSdk\Wl\Promotion\Pay;

/**
 * The list of possible actions for promotion payment pause periods.
 *
 * Last ID: 3
 *
 * Values:
 * - 2 (`PAUSE_INDEFINITE`): Hold indefinitely.
 * - 1 (`PAUSE_PERIOD`): Hold with exact start and end dates.
 * - 3 (`STOP_PAUSE`): Stop current holds and remove future holds.
 */
class PromotionPayPauseActionSid
{
    /** Hold indefinitely. */
    public const PAUSE_INDEFINITE = 2;

    /** Hold with exact start and end dates. */
    public const PAUSE_PERIOD = 1;

    /** Stop current holds and remove future holds. */
    public const STOP_PAUSE = 3;
}
