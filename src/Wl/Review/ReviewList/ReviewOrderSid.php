<?php

namespace WlSdk\Wl\Review\ReviewList;

/**
 * List of possible order for gets review.
 *
 * Values:
 * - 1 (`LATEST`): Ascending sort review by date.
 * - 3 (`NEGATIVE`): Ascending sort review by date.
 * - 4 (`OLDEST`): Descending sort review by date.
 * - 2 (`POSITIVE`): Descending sort review by date.
 */
class ReviewOrderSid
{
    /** Ascending sort review by date. */
    public const LATEST = 1;

    /** Ascending sort review by date. */
    public const NEGATIVE = 3;

    /** Descending sort review by date. */
    public const OLDEST = 4;

    /** Descending sort review by date. */
    public const POSITIVE = 2;
}
