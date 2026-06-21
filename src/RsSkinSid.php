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
class RsSkinSid
{
    /** Ai Agent web-chat. */
    public const AI_AGENT = 19;

    /** Application skin. */
    public const APPLICATION = 13;

    /** Appointment booking wizard. */
    public const APPOINTMENT = 7;

    /** Online store widget. */
    public const CATALOG_FOREIGN = 21;

    /** Event enrollment wizard widget. */
    public const ENROLLMENT = 8;

    /** Fitbuilder widget. */
    public const FITBUILDER = 17;

    /** Skin for lead tracking form. */
    public const LEAD = 9;

    /** Skin for lead tracking form from microservice. */
    public const LEAD_FOREIGN = 20;

    /** Mobile schedule version. */
    public const MOBILE_SCHEDULE = 10;

    /** Asset booking wizard. */
    public const RESOURCE = 16;

    /** Review list widget. */
    public const REVIEW_LIST = 4;

    /** General schedule design appearance. */
    public const SCHEDULE_DESIGN = 15;

    /** Foreign schedule widget on react language. */
    public const SCHEDULE_FOREIGN = 18;

    /** Schedule list widget. */
    public const SCHEDULE_LIST = 1;

    /** Standard version of schedule. */
    public const SCHEDULE_STANDARD = 14;

    /** Staff widget. */
    public const STAFF = 12;

    /** Online store widget. */
    public const STORE = 11;
}
