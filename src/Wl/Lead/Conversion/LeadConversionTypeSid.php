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
enum LeadConversionTypeSid: int
{
    case LOST = 1;
    case WON = 2;
}
