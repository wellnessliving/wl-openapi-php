<?php
namespace WlSdk\Wl\Mode;

/**
 * The source of a visit.
 * 
 * Last used ID: 30.
 * 
 * Values:
 * - 28 (`API`): Action made via Api Endpoint. Default for leads created via API, unless overridden.
 * - 21 (`AZURE`): Registered through `Azure`.
 * - 23 (`CENTRED`): Visit has been created by `CENTRED`.
 * - 8 (`CLASSPASS_BOOKING`): Visit has been created by `ClassPass`.
 * - 22 (`COLLECTIONS`): Debt paid via collections.
 * - 26 (`COLLECTIONS_FUTURE`): Debt paid via collections.
 * - 27 (`CONCERTO`): Action from Concerto.
 * - 18 (`EMAIL`): Action made via email.
 * - 20 (`FACEBOOK`): Indicating that the source is Facebook.
 * - 30 (`GO_HIGH_LEVEL`): Action from Go High Level.
 * - 19 (`GOOGLE`): Indicating that the source is Google.
 * - 7 (`GOOGLE_BOOKING`): Visit has been created by Google Booking Service.
 * - 14 (`GYMPASS_BOOKING`): Visit has been created by `GymPass`.
 * - 5 (`IMPORT`): Visit was created during import.
 * - 12 (`MICROSITE`): Action made via microsite.
 * 
 *   It is also names as directory listing.
 * - 24 (`MICROSOFT`): Indicating that the source is Microsoft.
 * - 13 (`MY_PRESENCE_SITE`): Client booked session on My Presence Site.
 * - 17 (`SMS`): Action made via SMS.
 * - 4 (`SPA_BACKEND`): Staff booked session from spa backend.
 * - 3 (`SPA_FRONTEND`): Client booked session from spa frontend.
 * - 10 (`SYSTEM`): Created by system.
 * - 6 (`UNDEFINED`): Means that we did not define mode.
 * - 16 (`WEB_APP_ATTENDANCE`): Client booked session from Attendance Web App.
 * - 15 (`WEB_APP_CHECK_IN`): Client checked-in for the session through Check-In Web App.
 * - 2 (`WEB_BACKEND`): Staff booked session for client from website backend.
 * - 1 (`WEB_FRONTEND`): Client booked session from website frontend.
 * - 11 (`WIDGET`): Action made via widget (purchase, book etc).
 * - 25 (`ZAPIER`): Action from Zapier.
 */
class ModeSid
{
    /** Action made via Api Endpoint. Default for leads created via API, unless overridden. */
    const API = 28;
    /** Registered through `Azure`. */
    const AZURE = 21;
    /** Visit has been created by `CENTRED`. */
    const CENTRED = 23;
    /** Visit has been created by `ClassPass`. */
    const CLASSPASS_BOOKING = 8;
    /** Debt paid via collections. */
    const COLLECTIONS = 22;
    /** Debt paid via collections. */
    const COLLECTIONS_FUTURE = 26;
    /** Action from Concerto. */
    const CONCERTO = 27;
    /** Action made via email. */
    const EMAIL = 18;
    /** Indicating that the source is Facebook. */
    const FACEBOOK = 20;
    /** Action from Go High Level. */
    const GO_HIGH_LEVEL = 30;
    /** Indicating that the source is Google. */
    const GOOGLE = 19;
    /** Visit has been created by Google Booking Service. */
    const GOOGLE_BOOKING = 7;
    /** Visit has been created by `GymPass`. */
    const GYMPASS_BOOKING = 14;
    /** Visit was created during import. */
    const IMPORT = 5;
    /** Action made via microsite. */
    const MICROSITE = 12;
    /** Indicating that the source is Microsoft. */
    const MICROSOFT = 24;
    /** Client booked session on My Presence Site. */
    const MY_PRESENCE_SITE = 13;
    /** Action made via SMS. */
    const SMS = 17;
    /** Staff booked session from spa backend. */
    const SPA_BACKEND = 4;
    /** Client booked session from spa frontend. */
    const SPA_FRONTEND = 3;
    /** Created by system. */
    const SYSTEM = 10;
    /** Means that we did not define mode. */
    const UNDEFINED = 6;
    /** Client booked session from Attendance Web App. */
    const WEB_APP_ATTENDANCE = 16;
    /** Client checked-in for the session through Check-In Web App. */
    const WEB_APP_CHECK_IN = 15;
    /** Staff booked session for client from website backend. */
    const WEB_BACKEND = 2;
    /** Client booked session from website frontend. */
    const WEB_FRONTEND = 1;
    /** Action made via widget (purchase, book etc). */
    const WIDGET = 11;
    /** Action from Zapier. */
    const ZAPIER = 25;
}
