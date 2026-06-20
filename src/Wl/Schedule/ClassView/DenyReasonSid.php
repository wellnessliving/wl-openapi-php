<?php

namespace WlSdk\Wl\Schedule\ClassView;

/**
 * Reasons why the client can't book this class.
 *
 * Last used ID: 24
 *
 * Values:
 * - 1 (`ACCESS_DENIED`): User is trying to book on behalf of another client, but does not have permission to do so.
 * - 2 (`ACCESS_LIMITED`): Manual restriction to book business, location or a certain class.
 *   Right now is not available in UI.
 * - 3 (`ACCOUNT_LIMIT`): The business can not take one more client because of business subscription limitations.
 *   Right now there is no such subscriptions, but it can appear in the future.
 * - 4 (`AGE_RESTRICTION`): Class is not available for certain age.
 * - 5 (`AGREE_NX`): Liability Release needs to be agreed.
 * - 22 (`BALANCE_NEGATIVE`): Client has unpaid fees.
 * - 7 (`BOOK_EARLY`): It's too early to book a class.
 * - 8 (`BOOK_LATE`): It's too late to book a class.
 * - 25 (`BOOK_OVERLAP`): User's visit overlaps with another visit.
 * - 9 (`BOOK_RESTRICT`): User's pricing options do not allow booking another visit within a certain period because of
 * pricing option limitations.
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
 * - 24 (`NOT_BOOKABLE_BY_TYPE`): Online booking is disabled for this type of client.
 * - 19 (`USER_INFO_MISSING`): Required personal details missing.
 * - 20 (`VISIT_BEFORE`): Visit to another class is required first.
 * - 21 (`WAIT_LIST_LIMIT_MAX`): The wait list is full.
 * - 23 (`WAIVER_NX`): Client has unsigned waiver.
 */
class DenyReasonSid
{
    /** User is trying to book on behalf of another client, but does not have permission to do so. */
    public const ACCESS_DENIED = 1;

    /** Manual restriction to book business, location or a certain class. */
    public const ACCESS_LIMITED = 2;

    /** The business can not take one more client because of business subscription limitations. */
    public const ACCOUNT_LIMIT = 3;

    /** Class is not available for certain age. */
    public const AGE_RESTRICTION = 4;

    /** Liability Release needs to be agreed. */
    public const AGREE_NX = 5;

    /** Client has unpaid fees. */
    public const BALANCE_NEGATIVE = 22;

    /** It's too early to book a class. */
    public const BOOK_EARLY = 7;

    /** It's too late to book a class. */
    public const BOOK_LATE = 8;

    /** User's visit overlaps with another visit. */
    public const BOOK_OVERLAP = 25;

    /** User's pricing options do not allow booking another visit within a certain period because of pricing option limitations. */
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

    /** Online booking is disabled for this type of client. */
    public const NOT_BOOKABLE_BY_TYPE = 24;

    /** Required personal details missing. */
    public const USER_INFO_MISSING = 19;

    /** Visit to another class is required first. */
    public const VISIT_BEFORE = 20;

    /** The wait list is full. */
    public const WAIT_LIST_LIMIT_MAX = 21;

    /** Client has unsigned waiver. */
    public const WAIVER_NX = 23;
}
