<?php

namespace WlSdk\Wl\Widget\Analytics;

/**
 * Widget analytics event types.
 *
 * Last ID: 3
 *
 * Values:
 * - 1 (`ABANDONED_CHECKOUT`): Checkout abandonment event.
 * - 2 (`BEGIN_CHECKOUT`): Begin checkout event.
 * - 3 (`PURCHASE`): Purchase event.
 */
class WidgetAnalyticsEventSid
{
    /** Checkout abandonment event. */
    public const ABANDONED_CHECKOUT = 1;

    /** Begin checkout event. */
    public const BEGIN_CHECKOUT = 2;

    /** Purchase event. */
    public const PURCHASE = 3;
}
