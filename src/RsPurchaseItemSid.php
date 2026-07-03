<?php

namespace WlSdk;

/**
 * A list of purchase types.
 *
 * Last used ID: 25.
 *
 * Values:
 * - 7 (`ACCOUNT`): Personal user's account refill.
 * - 11 (`ACCOUNT_BUSINESS`): Business account payment.
 * - 8 (`APPOINTMENT`): Single appointment reservation.
 *
 *   This purchase is created when a worker has charged a client for an appointment.
 *
 *   This purchase can only be created in POS.
 *
 *   Key of appointment.
 *
 *
 *
 *   A purchased item that is created during the online booking process {@link \WlSdk\RsPurchaseItemSid}.
 * - 18 (`APPOINTMENT_DEPOSIT`): Single appointment reservation with deposit.
 *
 *   This purchase created when client books a single appointment reservation with deposit amount,
 *   to do so appointment should be managed with deposit.
 * - 22 (`APPOINTMENT_TIP`): Tips for the appointment.
 *
 *
 *
 *   A purchased item that is created during the online booking process {@link \WlSdk\RsPurchaseItemSid}.
 * - 16 (`BUSINESS_EXPENSE`): Expense that comes along with the payment business. It contains information about
 * additional services which are
 *   included in the package. For example, payment for SMS.
 * - 17 (`BUSINESS_SKIP`): A skipped purchase for the business account.
 * - 23 (`BUSINESS_SUBSCRIPTION`): Business subscription payment.
 * - 2 (`CLASS_PERIOD`): Single classes.
 * - 24 (`COLLECTOR_DEBT`): Collectors payments
 * - 13 (`COMMENT`): Arbitrary money withdrawal with comment.
 * - 10 (`COUPON`): Gift Cards.
 * - 4 (`ENROLLMENT`): Events and enrollments. Client can not book only one class, he needs to book the whole
 * enrollment.
 * - 19 (`ENROLLMENT_DEPOSIT`): Enrollment reservation with a deposit.
 *
 *   This purchase created when client books an enrollment reservation with deposit amount,
 *   to do so enrollment should be managed with deposit.
 * - 21 (`ENROLLMENT_DISCOUNT`): Enrollment reservation with a discount.
 *
 *   This purchase created when client books an enrollment reservation with early bird price.
 * - 14 (`INSTALLMENT`): Payment by an installment plan.
 * - 3 (`MEMBERSHIP`): Recurrent payments.
 * - 9 (`PRODUCT`): Products.
 * - 1 (`PROMOTION`): Promotions.
 * - 25 (`PROMOTION_CANCEL_FEE`): Early cancellation fee for a memberships.
 * - 12 (`PROMOTION_RENEW`): A purchase to renew a promotion.
 * - 15 (`RESOURCE`): A purchase to book an asset.
 * - 20 (`RESOURCE_DEPOSIT`): A purchase to book a deposit asset.
 * - 6 (`SERVICE`): Purchase item for appointments.
 *
 *   This purchase item is created during the online booking process.
 *
 *
 *
 *   Purchase that is created when a staff adds payment for an appointment at POS {@link \WlSdk\RsPurchaseItemSid}.
 * - 26 (`TUITION`): Tuition purchase item.
 *   Used when client purchases tuition for an event list.
 * - 27 (`TUITION_FEE`): Tuition fee purchase item.
 *   Used when client purchases tuition for an event list.
 */
class RsPurchaseItemSid
{
    /** Personal user's account refill. */
    public const ACCOUNT = 7;

    /** Business account payment. */
    public const ACCOUNT_BUSINESS = 11;

    /** Single appointment reservation. */
    public const APPOINTMENT = 8;

    /** Single appointment reservation with deposit. */
    public const APPOINTMENT_DEPOSIT = 18;

    /** Tips for the appointment. */
    public const APPOINTMENT_TIP = 22;

    /** Expense that comes along with the payment business. It contains information about additional services which are */
    public const BUSINESS_EXPENSE = 16;

    /** A skipped purchase for the business account. */
    public const BUSINESS_SKIP = 17;

    /** Business subscription payment. */
    public const BUSINESS_SUBSCRIPTION = 23;

    /** Single classes. */
    public const CLASS_PERIOD = 2;

    /** Collectors payments */
    public const COLLECTOR_DEBT = 24;

    /** Arbitrary money withdrawal with comment. */
    public const COMMENT = 13;

    /** Gift Cards. */
    public const COUPON = 10;

    /** Events and enrollments. Client can not book only one class, he needs to book the whole enrollment. */
    public const ENROLLMENT = 4;

    /** Enrollment reservation with a deposit. */
    public const ENROLLMENT_DEPOSIT = 19;

    /** Enrollment reservation with a discount. */
    public const ENROLLMENT_DISCOUNT = 21;

    /** Payment by an installment plan. */
    public const INSTALLMENT = 14;

    /** Recurrent payments. */
    public const MEMBERSHIP = 3;

    /** Products. */
    public const PRODUCT = 9;

    /** Promotions. */
    public const PROMOTION = 1;

    /** Early cancellation fee for a memberships. */
    public const PROMOTION_CANCEL_FEE = 25;

    /** A purchase to renew a promotion. */
    public const PROMOTION_RENEW = 12;

    /** A purchase to book an asset. */
    public const RESOURCE = 15;

    /** A purchase to book a deposit asset. */
    public const RESOURCE_DEPOSIT = 20;

    /** Purchase item for appointments. */
    public const SERVICE = 6;

    /** Tuition purchase item. */
    public const TUITION = 26;

    /** Tuition fee purchase item. */
    public const TUITION_FEE = 27;
}
