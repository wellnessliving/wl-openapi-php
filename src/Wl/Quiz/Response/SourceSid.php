<?php
namespace WlSdk\Wl\Quiz\Response;

/**
 * List of sources where quiz response can be generated.
 * 
 * Last used ID: 6
 * 
 * Values:
 * - 2 (`BOOKING`): Quiz response received during booking process.
 * - 6 (`IMPORT`): Quiz response was imported.
 * - 7 (`KIOSK`): Quiz response received by kiosk mode link.
 * - 1 (`LINK`): Quiz response received by direct link.
 * - 5 (`MANUAL`): Quiz response received by direct link.
 * - 4 (`PURCHASE`): Quiz response received during purchase process.
 * - 3 (`REGISTRATION`): Quiz response received during registration process.
 */
enum SourceSid: int
{
    case BOOKING = 2;
    case IMPORT = 6;
    case KIOSK = 7;
    case LINK = 1;
    case MANUAL = 5;
    case PURCHASE = 4;
    case REGISTRATION = 3;
}
