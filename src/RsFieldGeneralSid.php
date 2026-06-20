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
 * - 14 (`STATUS`): Client status (client/member types). System default client/member types see
 * [SystemSid](#/components/schemas/Wl.Login.Type.SystemSid).
 * - 15 (`TIMEZONE`): Timezone field.
 * - 16 (`VACCINATION_STATUS`): Vaccination status. See
 * [VaccinationStatusSid](#/components/schemas/Wl.Login.Member.VaccinationStatus.VaccinationStatusSid).
 */
class RsFieldGeneralSid
{
    /** Set of fields to choose address. */
    const ADDRESS = 9;
    /** Set of fields to choose birthday date. */
    const BIRTHDAY = 7;
    /** Gender field. */
    const GENDER = 8;
    /** Image. */
    const IMAGE = 13;
    /** Home location. */
    const LOCATION = 10;
    /** Block with login information (email and password). */
    const LOGIN = 3;
    /** Member ID. */
    const MEMBER = 11;
    /** First name. */
    const NAME_FIRST = 2;
    /** Last name. */
    const NAME_LAST = 1;
    /** Cell phone number. */
    const PHONE_CELL = 4;
    /** Home phone number. */
    const PHONE_HOME = 5;
    /** Work phone number + ext. */
    const PHONE_WORK = 6;
    /** Referred by. */
    const REFERRER = 12;
    /** Client status (client/member types). System default client/member types see [SystemSid](#/components/schemas/Wl.Login.Type.SystemSid). */
    const STATUS = 14;
    /** Timezone field. */
    const TIMEZONE = 15;
    /** Vaccination status. See [VaccinationStatusSid](#/components/schemas/Wl.Login.Member.VaccinationStatus.VaccinationStatusSid). */
    const VACCINATION_STATUS = 16;
}
