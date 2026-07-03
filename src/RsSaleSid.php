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
 * - 5 (`PACKAGE`): Promotions with program {@link \WlSdk\RsProgramSid}.
 * - 4 (`PRODUCT`): Products: water, t-shirts, etc.
 * - 1 (`PROMOTION_CLASS`): Promotions with program category {@link \WlSdk\RsProgramCategorySid} and {@link
 * \WlSdk\RsProgramCategorySid}.
 * - 9 (`PROMOTION_RESOURCE`): Promotions with program category {@link \WlSdk\RsProgramCategorySid}.
 * - 2 (`PROMOTION_SERVICE`): Promotions with program category {@link \WlSdk\RsProgramCategorySid} and {@link
 * \WlSdk\RsProgramCategorySid}.
 * - 13 (`PROMOTION_VIDEO`): Promotions with program category {@link \WlSdk\RsProgramCategorySid}.
 * - 10 (`QUICK_BUY`): Products: water, t-shirts, etc. That is available for quick buy.
 * - 14 (`TUITION`): Tuition.
 * - 15 (`TUITION_FEE`): Tuition fees.
 */
class RsSaleSid
{
    /** Single appointment reservation. */
    public const APPOINTMENT = 8;

    /** Single appointment deposit reservation. */
    public const APPOINTMENT_DEPOSIT = 11;

    /** Tips for the appointment. */
    public const APPOINTMENT_TIP = 12;

    /** Single class visit. */
    public const CLASS_PERIOD = 6;

    /** Gift card. */
    public const COUPON = 7;

    /** Enrollments. Classes where flag event is `true`. */
    public const ENROLLMENT = 3;

    /** Promotions with program {@link \WlSdk\RsProgramSid}. */
    public const PACKAGE = 5;

    /** Products: water, t-shirts, etc. */
    public const PRODUCT = 4;

    /** Promotions with program category {@link \WlSdk\RsProgramCategorySid} and {@link \WlSdk\RsProgramCategorySid}. */
    public const PROMOTION_CLASS = 1;

    /** Promotions with program category {@link \WlSdk\RsProgramCategorySid}. */
    public const PROMOTION_RESOURCE = 9;

    /** Promotions with program category {@link \WlSdk\RsProgramCategorySid} and {@link \WlSdk\RsProgramCategorySid}. */
    public const PROMOTION_SERVICE = 2;

    /** Promotions with program category {@link \WlSdk\RsProgramCategorySid}. */
    public const PROMOTION_VIDEO = 13;

    /** Products: water, t-shirts, etc. That is available for quick buy. */
    public const QUICK_BUY = 10;

    /** Tuition. */
    public const TUITION = 14;

    /** Tuition fees. */
    public const TUITION_FEE = 15;
}
