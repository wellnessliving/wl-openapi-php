<?php

namespace WlSdk\Wl\Visit\Kiosk;

/**
 * Results of a scan at the staff check-in kiosk.
 *
 * Last used ID: 5
 *
 * Values:
 * - 4 (`DYNAMIC_EXPIRED`): The scanned value is a dynamic barcode of a client that has expired.
 * - 5 (`FORMAT_UNSUPPORTED`): The business uses QR codes for the member IDs, and the kiosk does not read them.
 * - 1 (`FOUND`): The scanned value identifies an active client that the staff member may see.
 * - 3 (`MEMBER_INACTIVE`): The scanned value identifies a client whose member ID is inactive.
 * - 2 (`NOT_FOUND`): No client that the staff member may see matches the scanned value.
 */
class ScanResultSid
{
    /** The scanned value is a dynamic barcode of a client that has expired. */
    public const DYNAMIC_EXPIRED = 4;

    /** The business uses QR codes for the member IDs, and the kiosk does not read them. */
    public const FORMAT_UNSUPPORTED = 5;

    /** The scanned value identifies an active client that the staff member may see. */
    public const FOUND = 1;

    /** The scanned value identifies a client whose member ID is inactive. */
    public const MEMBER_INACTIVE = 3;

    /** No client that the staff member may see matches the scanned value. */
    public const NOT_FOUND = 2;
}
