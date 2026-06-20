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
enum PurchaseOptionViewSid: int
{
    case APPOINTMENT = 1;
    case CLASS_PERIOD = 2;
    case COUPON = 3;
    case ENROLLMENT = 4;
    case MEMBERSHIP = 8;
    case PACKAGE = 5;
    case PRODUCT = 6;
    case PROMOTION = 7;
    case QUICK_BUY = 9;
}
