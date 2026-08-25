<?php

namespace WlSdk\Wl\Discount;

/**
 * Discount types.
 *
 * Last used ID: 6.
 *
 * Values:
 * - 5 (`CART`): Discount for catalog cart.
 * - 4 (`CODE`): Discount by discount code.
 * - 6 (`CUSTOM`): Group of custom discounts applied individually to a purchase item.
 * - 1 (`LOGIN_TYPE`): Discount by login type.
 * - 3 (`MANUAL`): Manual discount for element of purchase.
 * - 2 (`PRIZE`): Discount by reward prize.
 */
class DiscountRuleSid
{
    /** Discount for catalog cart. */
    public const CART = 5;

    /** Discount by discount code. */
    public const CODE = 4;

    /** Group of custom discounts applied individually to a purchase item. */
    public const CUSTOM = 6;

    /** Discount by login type. */
    public const LOGIN_TYPE = 1;

    /** Manual discount for element of purchase. */
    public const MANUAL = 3;

    /** Discount by reward prize. */
    public const PRIZE = 2;
}
