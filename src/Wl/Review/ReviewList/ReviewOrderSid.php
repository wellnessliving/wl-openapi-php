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
enum ReviewOrderSid: int
{
    case LATEST = 1;
    case NEGATIVE = 3;
    case OLDEST = 4;
    case POSITIVE = 2;
}
