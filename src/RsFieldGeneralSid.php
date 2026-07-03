<?php

namespace WlSdk;

/**
 * List of general fields in user's profile.
 *
 * The term "field" is not equal to "input". A field can contain multiple inputs, e.g. the "birthday" field contains 3
 * selects (day, month, year). All fields listed in this sid (except manual fields) have class that process them.
 *
 * Manual fields have only constant in this sid. They have no associated class and processed separately in view, e.g.
 * user email/password field that has its own widget.
 *
 *
 *
 * Last used ID: 16.
 *
 * Values:
 * - 9 (`ADDRESS`): Set of fields to choose address.
 * - 7 (`BIRTHDAY`): Set of fields to choose birthday date.
 * - 8 (`GENDER`): Gender field.
 * - 13 (`IMAGE`): Image.
 * - 10 (`LOCATION`): Home location.
 * - 3 (`LOGIN`): Block with login information (email and password).
 * - 11 (`MEMBER`): Member ID.
 * - 2 (`NAME_FIRST`): First name.
 * - 1 (`NAME_LAST`): Last name.
 * - 4 (`PHONE_CELL`): Cell phone number.
 * - 5 (`PHONE_HOME`): Home phone number.
 * - 6 (`PHONE_WORK`): Work phone number + ext.
 * - 12 (`REFERRER`): Referred by.
 * - 14 (`STATUS`): Client status (client/member types). System default client/member types see {@link
 * \WlSdk\Wl\Login\Type\SystemSid}.
 * - 15 (`TIMEZONE`): Timezone field.
 * - 16 (`VACCINATION_STATUS`): Vaccination status. See {@link
 * \WlSdk\Wl\Login\Member\VaccinationStatus\VaccinationStatusSid}.
 */
class RsFieldGeneralSid
{
    /** Set of fields to choose address. */
    public const ADDRESS = 9;

    /** Set of fields to choose birthday date. */
    public const BIRTHDAY = 7;

    /** Gender field. */
    public const GENDER = 8;

    /** Image. */
    public const IMAGE = 13;

    /** Home location. */
    public const LOCATION = 10;

    /** Block with login information (email and password). */
    public const LOGIN = 3;

    /** Member ID. */
    public const MEMBER = 11;

    /** First name. */
    public const NAME_FIRST = 2;

    /** Last name. */
    public const NAME_LAST = 1;

    /** Cell phone number. */
    public const PHONE_CELL = 4;

    /** Home phone number. */
    public const PHONE_HOME = 5;

    /** Work phone number + ext. */
    public const PHONE_WORK = 6;

    /** Referred by. */
    public const REFERRER = 12;

    /** Client status (client/member types). System default client/member types see {@link \WlSdk\Wl\Login\Type\SystemSid}. */
    public const STATUS = 14;

    /** Timezone field. */
    public const TIMEZONE = 15;

    /** Vaccination status. See {@link \WlSdk\Wl\Login\Member\VaccinationStatus\VaccinationStatusSid}. */
    public const VACCINATION_STATUS = 16;
}
