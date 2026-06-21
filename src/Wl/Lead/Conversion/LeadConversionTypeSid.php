<?php

namespace WlSdk\Wl\Lead\Conversion;

/**
 * Lead conversion type.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`LOST`): Consider leads as 'Lost' or no longer interested.
 * - 2 (`WON`): Consider leads as successfully 'Won'.
 */
class LeadConversionTypeSid
{
    /** Consider leads as 'Lost' or no longer interested. */
    public const LOST = 1;

    /** Consider leads as successfully 'Won'. */
    public const WON = 2;
}
