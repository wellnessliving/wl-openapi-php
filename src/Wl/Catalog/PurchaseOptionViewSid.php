<?php

namespace WlSdk\Wl\Catalog;

/**
 * A list of Purchase Option view types.
 *
 * Last ID: 9.
 *
 * Values:
 * - 1 (`APPOINTMENT`): A single appointment reservation.
 * - 2 (`CLASS_PERIOD`): A single class reservation.
 * - 3 (`COUPON`): A gift card.
 * - 4 (`ENROLLMENT`): Enrollments. Classes where flag event is `true`.
 * - 8 (`MEMBERSHIP`): Promotions with programs:
 *   * {@link \WlSdk\RsProgramSid};
 *   * {@link \WlSdk\RsProgramSid};
 *   * {@link \WlSdk\RsProgramSid};
 *   * {@link \WlSdk\RsProgramSid};
 *   * {@link \WlSdk\RsProgramSid}.
 * - 5 (`PACKAGE`): Promotions with program {@link \WlSdk\RsProgramSid}.
 * - 6 (`PRODUCT`): Products (such as water, t-shirts, etc.).
 * - 7 (`PROMOTION`): Session passes.
 * - 9 (`QUICK_BUY`): Products available for quick buy.
 */
class PurchaseOptionViewSid
{
    /** A single appointment reservation. */
    public const APPOINTMENT = 1;

    /** A single class reservation. */
    public const CLASS_PERIOD = 2;

    /** A gift card. */
    public const COUPON = 3;

    /** Enrollments. Classes where flag event is `true`. */
    public const ENROLLMENT = 4;

    /** Promotions with programs: */
    public const MEMBERSHIP = 8;

    /** Promotions with program {@link \WlSdk\RsProgramSid}. */
    public const PACKAGE = 5;

    /** Products (such as water, t-shirts, etc.). */
    public const PRODUCT = 6;

    /** Session passes. */
    public const PROMOTION = 7;

    /** Products available for quick buy. */
    public const QUICK_BUY = 9;
}
