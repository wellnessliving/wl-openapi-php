<?php

namespace WlSdk\Wl\Visit;

/**
 * Reasons of failed book or check-in.
 *
 * Last used ID: 38
 *
 * Values:
 * - 1 (`ACCESS_DENIED`): The business can not take one more client.
 * - 2 (`ACCESS_LIMITED`): Access is limited.
 * - 3 (`ACCOUNT_LIMIT`): The business can not take one more client.
 * - 4 (`AGE_RESTRICTION`): Class is not available for certain age.
 * - 5 (`AGREE_NX`): Liability Release needs to be agreed.
 * - 25 (`APPOINTMENT_DENY`): Service approval denied
 * - 26 (`APPOINTMENT_REQUEST`): Service requires staff approval
 * - 23 (`ATTEND_GYM_DISABLE`): Business Policy restricts Gym Visits
 * - 38 (`ATTEND_ONCE`): The client already has a checked-in gym visit on the same local day, at any location of the
 * business.
 * - 22 (`ATTEND_SELF_DISABLE`): Self check-in not available for this service
 * - 28 (`ATTEND_UNPAID`): Business policy prevents unpaid check-ins
 * - 27 (`ATTEND_WAIT`): Client is on the Wait List
 * - 37 (`BALANCE_NEGATIVE`): Client has a negative account balance
 * - 7 (`BOOK_EARLY`): It's too early to book a class.
 * - 8 (`BOOK_LATE`): It's too late to book a class.
 * - 24 (`BOOK_NX`): Visit must be booked before check-in
 * - 9 (`BOOK_RESTRICT`): Cannot book to this class anymore.
 * - 6 (`BOOKED_ALREADY`): Client is already booked for this session.
 * - 10 (`BUSINESS_INACTIVE`): Business is inactive.
 * - 11 (`CLASS_CANCELED`): Class is canceled.
 * - 14 (`CLASS_FULL`): Class is full.
 * - 15 (`CLASS_NOT_AVAILABLE_ANYMORE`): Class does not exist anymore.
 * - 12 (`CLIENT_FLAGGED`): Client is flagged at location.
 * - 13 (`CREDIT_CARD_REQUIRE`): Credit card is required for booking services.
 * - 16 (`HOLIDAY`): Business is closed.
 * - 17 (`LOGIN_REQUIRED`): Login is required.
 * - 18 (`NOT_BOOKABLE`): Online booking is disabled for the class.
 * - 35 (`PAYMENT_CONTRACT`): Contract not signed
 * - 36 (`PAYMENT_EXPIRE`): Purchase Option expired
 * - 34 (`PAYMENT_HOLD`): Purchase Option on hold
 * - 30 (`PAYMENT_NX`): No valid Purchase Option
 * - 33 (`PAYMENT_REMAIN`): Purchase Option has no visits left
 * - 32 (`PAYMENT_START`): Purchase Option not active yet
 * - 31 (`SCHEDULE_RESTRICT`): Attendance limit on Purchase Option reached
 * - 29 (`UNKNOWN`): Check-in could not be completed
 * - 19 (`USER_INFO_MISSING`): Required personal details missing.
 * - 20 (`VISIT_BEFORE`): Visit to another class is required first.
 * - 21 (`WAIT_LIST_LIMIT_MAX`): The wait list is full.
 */
class VisitDenyReasonSid
{
    /** The business can not take one more client. */
    public const ACCESS_DENIED = 1;

    /** Access is limited. */
    public const ACCESS_LIMITED = 2;

    /** The business can not take one more client. */
    public const ACCOUNT_LIMIT = 3;

    /** Class is not available for certain age. */
    public const AGE_RESTRICTION = 4;

    /** Liability Release needs to be agreed. */
    public const AGREE_NX = 5;

    /** Service approval denied */
    public const APPOINTMENT_DENY = 25;

    /** Service requires staff approval */
    public const APPOINTMENT_REQUEST = 26;

    /** Business Policy restricts Gym Visits */
    public const ATTEND_GYM_DISABLE = 23;

    /** The client already has a checked-in gym visit on the same local day, at any location of the business. */
    public const ATTEND_ONCE = 38;

    /** Self check-in not available for this service */
    public const ATTEND_SELF_DISABLE = 22;

    /** Business policy prevents unpaid check-ins */
    public const ATTEND_UNPAID = 28;

    /** Client is on the Wait List */
    public const ATTEND_WAIT = 27;

    /** Client has a negative account balance */
    public const BALANCE_NEGATIVE = 37;

    /** It's too early to book a class. */
    public const BOOK_EARLY = 7;

    /** It's too late to book a class. */
    public const BOOK_LATE = 8;

    /** Visit must be booked before check-in */
    public const BOOK_NX = 24;

    /** Cannot book to this class anymore. */
    public const BOOK_RESTRICT = 9;

    /** Client is already booked for this session. */
    public const BOOKED_ALREADY = 6;

    /** Business is inactive. */
    public const BUSINESS_INACTIVE = 10;

    /** Class is canceled. */
    public const CLASS_CANCELED = 11;

    /** Class is full. */
    public const CLASS_FULL = 14;

    /** Class does not exist anymore. */
    public const CLASS_NOT_AVAILABLE_ANYMORE = 15;

    /** Client is flagged at location. */
    public const CLIENT_FLAGGED = 12;

    /** Credit card is required for booking services. */
    public const CREDIT_CARD_REQUIRE = 13;

    /** Business is closed. */
    public const HOLIDAY = 16;

    /** Login is required. */
    public const LOGIN_REQUIRED = 17;

    /** Online booking is disabled for the class. */
    public const NOT_BOOKABLE = 18;

    /** Contract not signed */
    public const PAYMENT_CONTRACT = 35;

    /** Purchase Option expired */
    public const PAYMENT_EXPIRE = 36;

    /** Purchase Option on hold */
    public const PAYMENT_HOLD = 34;

    /** No valid Purchase Option */
    public const PAYMENT_NX = 30;

    /** Purchase Option has no visits left */
    public const PAYMENT_REMAIN = 33;

    /** Purchase Option not active yet */
    public const PAYMENT_START = 32;

    /** Attendance limit on Purchase Option reached */
    public const SCHEDULE_RESTRICT = 31;

    /** Check-in could not be completed */
    public const UNKNOWN = 29;

    /** Required personal details missing. */
    public const USER_INFO_MISSING = 19;

    /** Visit to another class is required first. */
    public const VISIT_BEFORE = 20;

    /** The wait list is full. */
    public const WAIT_LIST_LIMIT_MAX = 21;
}
