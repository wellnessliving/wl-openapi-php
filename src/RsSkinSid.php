<?php
namespace WlSdk;

/**
 * A list of skin types.
 * 
 * 
 * 
 * Last used ID: 21.
 * 
 * Values:
 * - 19 (`AI_AGENT`): Ai Agent web-chat.
 * - 13 (`APPLICATION`): Application skin.
 * - 7 (`APPOINTMENT`): Appointment booking wizard.
 * - 21 (`CATALOG_FOREIGN`): Online store widget.
 * - 8 (`ENROLLMENT`): Event enrollment wizard widget.
 * - 17 (`FITBUILDER`): Fitbuilder widget.
 * - 9 (`LEAD`): Skin for lead tracking form.
 * - 20 (`LEAD_FOREIGN`): Skin for lead tracking form from microservice.
 * - 10 (`MOBILE_SCHEDULE`): Mobile schedule version.
 * - 16 (`RESOURCE`): Asset booking wizard.
 * - 4 (`REVIEW_LIST`): Review list widget.
 * - 15 (`SCHEDULE_DESIGN`): General schedule design appearance.
 * - 18 (`SCHEDULE_FOREIGN`): Foreign schedule widget on react language.
 * - 1 (`SCHEDULE_LIST`): Schedule list widget.
 * - 14 (`SCHEDULE_STANDARD`): Standard version of schedule.
 * 
 *   This skin is the same as [RsSkinSid::SCHEDULE_LIST](#/components/schemas/RsSkinSid) except that design can not be
 * changed, only standard
 *   settings can be used.
 * - 12 (`STAFF`): Staff widget.
 * - 11 (`STORE`): Online store widget.
 */
enum RsSkinSid: int
{
    case AI_AGENT = 19;
    case APPLICATION = 13;
    case APPOINTMENT = 7;
    case CATALOG_FOREIGN = 21;
    case ENROLLMENT = 8;
    case FITBUILDER = 17;
    case LEAD = 9;
    case LEAD_FOREIGN = 20;
    case MOBILE_SCHEDULE = 10;
    case RESOURCE = 16;
    case REVIEW_LIST = 4;
    case SCHEDULE_DESIGN = 15;
    case SCHEDULE_FOREIGN = 18;
    case SCHEDULE_LIST = 1;
    case SCHEDULE_STANDARD = 14;
    case STAFF = 12;
    case STORE = 11;
}
