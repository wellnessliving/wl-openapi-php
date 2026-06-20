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
enum ModeSid: int
{
    case API = 28;
    case AZURE = 21;
    case CENTRED = 23;
    case CLASSPASS_BOOKING = 8;
    case COLLECTIONS = 22;
    case COLLECTIONS_FUTURE = 26;
    case CONCERTO = 27;
    case EMAIL = 18;
    case FACEBOOK = 20;
    case GO_HIGH_LEVEL = 30;
    case GOOGLE = 19;
    case GOOGLE_BOOKING = 7;
    case GYMPASS_BOOKING = 14;
    case IMPORT = 5;
    case MICROSITE = 12;
    case MICROSOFT = 24;
    case MY_PRESENCE_SITE = 13;
    case SMS = 17;
    case SPA_BACKEND = 4;
    case SPA_FRONTEND = 3;
    case SYSTEM = 10;
    case UNDEFINED = 6;
    case WEB_APP_ATTENDANCE = 16;
    case WEB_APP_CHECK_IN = 15;
    case WEB_BACKEND = 2;
    case WEB_FRONTEND = 1;
    case WIDGET = 11;
    case ZAPIER = 25;
}
