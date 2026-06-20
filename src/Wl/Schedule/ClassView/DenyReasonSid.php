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
enum DenyReasonSid: int
{
    case ACCESS_DENIED = 1;
    case ACCESS_LIMITED = 2;
    case ACCOUNT_LIMIT = 3;
    case AGE_RESTRICTION = 4;
    case AGREE_NX = 5;
    case BALANCE_NEGATIVE = 22;
    case BOOK_EARLY = 7;
    case BOOK_LATE = 8;
    case BOOK_OVERLAP = 25;
    case BOOK_RESTRICT = 9;
    case BOOKED_ALREADY = 6;
    case BUSINESS_INACTIVE = 10;
    case CLASS_CANCELED = 11;
    case CLASS_FULL = 14;
    case CLASS_NOT_AVAILABLE_ANYMORE = 15;
    case CLIENT_FLAGGED = 12;
    case CREDIT_CARD_REQUIRE = 13;
    case HOLIDAY = 16;
    case LOGIN_REQUIRED = 17;
    case NOT_BOOKABLE = 18;
    case NOT_BOOKABLE_BY_TYPE = 24;
    case USER_INFO_MISSING = 19;
    case VISIT_BEFORE = 20;
    case WAIT_LIST_LIMIT_MAX = 21;
    case WAIVER_NX = 23;
}
