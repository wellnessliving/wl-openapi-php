<?php

namespace WlSdk\Wl\Widget\Analytics;

/**
 * Widget analytics checkout types.
 *
 * Values:
 * - 1 (`ANY`): Any checkout type.
 * - 3 (`BOOKING`): Booking checkout type.
 * - 2 (`STORE_PURCHASE`): Store purchase checkout type.
 */
class WidgetAnalyticsCheckoutTypeSid
{
    /** Any checkout type. */
    public const ANY = 1;

    /** Booking checkout type. */
    public const BOOKING = 3;

    /** Store purchase checkout type. */
    public const STORE_PURCHASE = 2;
}
