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
enum RsFieldGeneralSid: int
{
    case ADDRESS = 9;
    case BIRTHDAY = 7;
    case GENDER = 8;
    case IMAGE = 13;
    case LOCATION = 10;
    case LOGIN = 3;
    case MEMBER = 11;
    case NAME_FIRST = 2;
    case NAME_LAST = 1;
    case PHONE_CELL = 4;
    case PHONE_HOME = 5;
    case PHONE_WORK = 6;
    case REFERRER = 12;
    case STATUS = 14;
    case TIMEZONE = 15;
    case VACCINATION_STATUS = 16;
}
