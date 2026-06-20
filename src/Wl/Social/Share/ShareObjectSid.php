<?php
namespace WlSdk\Wl\Social\Share;

/**
 * A list of types object for share post to social network.
 * 
 * Last used ID: 4.
 * 
 * Values:
 * - 4 (`BOOK`): Book.
 * - 3 (`LOCATION`): Location.
 * - 1 (`PURCHASE`): Purchase.
 * - 2 (`REVIEW`): Review.
 */
enum ShareObjectSid: int
{
    case BOOK = 4;
    case LOCATION = 3;
    case PURCHASE = 1;
    case REVIEW = 2;
}
