<?php

namespace WlSdk\Wl\Login\Attendance\Design;

/**
 * List of fields that can be used on attendance list.
 *
 * Last ID: 21.
 *
 * Values:
 * - 1 (`AGE`): Client's age.
 * - 20 (`ATTENDANCE_AT_RANK`): Attendance at rank.
 * - 16 (`BELT`): Title of client's current belt.
 * - 15 (`BELT_CATEGORY`): Select of belt categories, which connected to client.
 * - 12 (`BOOKED_BY`): User who booked visit.
 * - 21 (`CONDITION_FOR_PROMOTION`): Class conditions for belt promotion.
 * - 2 (`EMAIL`): Client's email address.
 * - 3 (`GENDER`): Client's age.
 * - 10 (`LOGIN`): Client's Name.
 * - 4 (`MEMBER_NUMBER`): Client's member identifier.
 * - 5 (`ORDER_NUMBER`): Type of payment that applied to visit.
 * - 6 (`PAY_WITH`): Type of payment that applied to visit.
 * - 7 (`PHONE`): Client's phone number.
 * - 8 (`PICTURE`): Client's picture.
 * - 18 (`QUIZ`): Assigned forms.
 * - 17 (`READY_FOR_PROMOTION`): Whether client ready for rank promotion.
 * - 13 (`STATUS`): Visit status.
 * - 19 (`TIME_AT_RANK`): Time at rank.
 * - 11 (`VISIT_ASSET`): Assets.
 * - 9 (`VISIT_REMAIN`): Count of remaining visits in client promotion.
 * - 14 (`WAIT_FROM`): When the user was added to the wait list.
 */
class FieldListSid
{
    /** Client's age. */
    public const AGE = 1;

    /** Attendance at rank. */
    public const ATTENDANCE_AT_RANK = 20;

    /** Title of client's current belt. */
    public const BELT = 16;

    /** Select of belt categories, which connected to client. */
    public const BELT_CATEGORY = 15;

    /** User who booked visit. */
    public const BOOKED_BY = 12;

    /** Class conditions for belt promotion. */
    public const CONDITION_FOR_PROMOTION = 21;

    /** Client's email address. */
    public const EMAIL = 2;

    /** Client's age. */
    public const GENDER = 3;

    /** Client's Name. */
    public const LOGIN = 10;

    /** Client's member identifier. */
    public const MEMBER_NUMBER = 4;

    /** Type of payment that applied to visit. */
    public const ORDER_NUMBER = 5;

    /** Type of payment that applied to visit. */
    public const PAY_WITH = 6;

    /** Client's phone number. */
    public const PHONE = 7;

    /** Client's picture. */
    public const PICTURE = 8;

    /** Assigned forms. */
    public const QUIZ = 18;

    /** Whether client ready for rank promotion. */
    public const READY_FOR_PROMOTION = 17;

    /** Visit status. */
    public const STATUS = 13;

    /** Time at rank. */
    public const TIME_AT_RANK = 19;

    /** Assets. */
    public const VISIT_ASSET = 11;

    /** Count of remaining visits in client promotion. */
    public const VISIT_REMAIN = 9;

    /** When the user was added to the wait list. */
    public const WAIT_FROM = 14;
}
