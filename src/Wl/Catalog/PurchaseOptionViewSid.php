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
 *   * [RsProgramSid::ACCOUNT_MEMBERSHIP](#/components/schemas/RsProgramSid);
 *   * [RsProgramSid::CLASS_MEMBERSHIP](#/components/schemas/RsProgramSid);
 *   * [RsProgramSid::RESOURCE_MEMBERSHIP](#/components/schemas/RsProgramSid);
 *   * [RsProgramSid::SERVICE_MEMBERSHIP](#/components/schemas/RsProgramSid);
 *   * [RsProgramSid::VISIT_MEMBERSHIP](#/components/schemas/RsProgramSid).
 * - 5 (`PACKAGE`): Promotions with program [RsProgramSid::PACKAGE](#/components/schemas/RsProgramSid).
 * - 6 (`PRODUCT`): Products (such as water, t-shirts, etc.).
 * - 7 (`PROMOTION`): Session passes.
 * - 9 (`QUICK_BUY`): Products available for quick buy.
 */
class PurchaseOptionViewSid
{
    /** A single appointment reservation. */
    const APPOINTMENT = 1;
    /** A single class reservation. */
    const CLASS_PERIOD = 2;
    /** A gift card. */
    const COUPON = 3;
    /** Enrollments. Classes where flag event is `true`. */
    const ENROLLMENT = 4;
    /** Promotions with programs: */
    const MEMBERSHIP = 8;
    /** Promotions with program [RsProgramSid::PACKAGE](#/components/schemas/RsProgramSid). */
    const PACKAGE = 5;
    /** Products (such as water, t-shirts, etc.). */
    const PRODUCT = 6;
    /** Session passes. */
    const PROMOTION = 7;
    /** Products available for quick buy. */
    const QUICK_BUY = 9;
}
