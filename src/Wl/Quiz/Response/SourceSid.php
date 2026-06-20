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
class SourceSid
{
    /** Quiz response received during booking process. */
    const BOOKING = 2;
    /** Quiz response was imported. */
    const IMPORT = 6;
    /** Quiz response received by kiosk mode link. */
    const KIOSK = 7;
    /** Quiz response received by direct link. */
    const LINK = 1;
    /** Quiz response received by direct link. */
    const MANUAL = 5;
    /** Quiz response received during purchase process. */
    const PURCHASE = 4;
    /** Quiz response received during registration process. */
    const REGISTRATION = 3;
}
