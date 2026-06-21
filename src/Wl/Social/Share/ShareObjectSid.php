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
class ShareObjectSid
{
    /** Book. */
    public const BOOK = 4;

    /** Location. */
    public const LOCATION = 3;

    /** Purchase. */
    public const PURCHASE = 1;

    /** Review. */
    public const REVIEW = 2;
}
