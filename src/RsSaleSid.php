<?php
namespace WlSdk;

/**
 * List of sale categories on the store page.
 * 
 * Last ID: 13.
 * 
 * Values:
 * - 8 (`APPOINTMENT`): Single appointment reservation.
 * - 11 (`APPOINTMENT_DEPOSIT`): Single appointment deposit reservation.
 * - 12 (`APPOINTMENT_TIP`): Tips for the appointment.
 * - 6 (`CLASS_PERIOD`): Single class visit.
 * - 7 (`COUPON`): Gift card.
 * - 3 (`ENROLLMENT`): Enrollments. Classes where flag event is `true`.
 * - 5 (`PACKAGE`): Promotions with program [RsProgramSid::PACKAGE](#/components/schemas/RsProgramSid).
 * - 4 (`PRODUCT`): Products: water, t-shirts, etc.
 * - 1 (`PROMOTION_CLASS`): Promotions with program category
 * [RsProgramCategorySid::CLASSES](#/components/schemas/RsProgramCategorySid) and
 * [RsProgramCategorySid::VISIT](#/components/schemas/RsProgramCategorySid).
 * - 9 (`PROMOTION_RESOURCE`): Promotions with program category
 * [RsProgramCategorySid::RESOURCE](#/components/schemas/RsProgramCategorySid).
 * - 2 (`PROMOTION_SERVICE`): Promotions with program category
 * [RsProgramCategorySid::SERVICE](#/components/schemas/RsProgramCategorySid) and
 * [RsProgramCategorySid::INSURANCE](#/components/schemas/RsProgramCategorySid).
 * - 13 (`PROMOTION_VIDEO`): Promotions with program category
 * [RsProgramCategorySid::VIDEO](#/components/schemas/RsProgramCategorySid).
 * - 10 (`QUICK_BUY`): Products: water, t-shirts, etc. That is available for quick buy.
 * - 14 (`TUITION`): Tuition.
 */
enum RsSaleSid: int
{
    case APPOINTMENT = 8;
    case APPOINTMENT_DEPOSIT = 11;
    case APPOINTMENT_TIP = 12;
    case CLASS_PERIOD = 6;
    case COUPON = 7;
    case ENROLLMENT = 3;
    case PACKAGE = 5;
    case PRODUCT = 4;
    case PROMOTION_CLASS = 1;
    case PROMOTION_RESOURCE = 9;
    case PROMOTION_SERVICE = 2;
    case PROMOTION_VIDEO = 13;
    case QUICK_BUY = 10;
    case TUITION = 14;
}
