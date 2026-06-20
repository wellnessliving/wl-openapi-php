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
class RsSaleSid
{
    /** Single appointment reservation. */
    const APPOINTMENT = 8;
    /** Single appointment deposit reservation. */
    const APPOINTMENT_DEPOSIT = 11;
    /** Tips for the appointment. */
    const APPOINTMENT_TIP = 12;
    /** Single class visit. */
    const CLASS_PERIOD = 6;
    /** Gift card. */
    const COUPON = 7;
    /** Enrollments. Classes where flag event is `true`. */
    const ENROLLMENT = 3;
    /** Promotions with program [RsProgramSid::PACKAGE](#/components/schemas/RsProgramSid). */
    const PACKAGE = 5;
    /** Products: water, t-shirts, etc. */
    const PRODUCT = 4;
    /** Promotions with program category [RsProgramCategorySid::CLASSES](#/components/schemas/RsProgramCategorySid) and [RsProgramCategorySid::VISIT](#/components/schemas/RsProgramCategorySid). */
    const PROMOTION_CLASS = 1;
    /** Promotions with program category [RsProgramCategorySid::RESOURCE](#/components/schemas/RsProgramCategorySid). */
    const PROMOTION_RESOURCE = 9;
    /** Promotions with program category [RsProgramCategorySid::SERVICE](#/components/schemas/RsProgramCategorySid) and [RsProgramCategorySid::INSURANCE](#/components/schemas/RsProgramCategorySid). */
    const PROMOTION_SERVICE = 2;
    /** Promotions with program category [RsProgramCategorySid::VIDEO](#/components/schemas/RsProgramCategorySid). */
    const PROMOTION_VIDEO = 13;
    /** Products: water, t-shirts, etc. That is available for quick buy. */
    const QUICK_BUY = 10;
    /** Tuition. */
    const TUITION = 14;
}
