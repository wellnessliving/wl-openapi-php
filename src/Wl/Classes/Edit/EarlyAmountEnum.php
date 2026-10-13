<?php

namespace WlSdk\Wl\Classes\Edit;

/**
 * Meaning of the early bird amount.
 *
 * The event setup form offers a block or a non-block event the whole list, and a ticketed event
 * only the discounts - a ticketed event has no regular price to replace.
 *
 * Values:
 * - 2 (`DISCOUNT`): The amount is a discount in the currency of the business.
 *   The regular price of the event is reduced by this amount.
 * - 3 (`PERCENT`): The amount is a discount in percent of the regular price of the event.
 * - 1 (`PRICE`): The amount is the price that replaces the regular price of the event.
 *
 *   Legacy behavior - this is the only way the early bird price was stored before the early
 *   bird discount was introduced.
 */
class EarlyAmountEnum
{
    /** The amount is a discount in the currency of the business. */
    public const DISCOUNT = 2;

    /** The amount is a discount in percent of the regular price of the event. */
    public const PERCENT = 3;

    /** The amount is the price that replaces the regular price of the event. */
    public const PRICE = 1;
}
