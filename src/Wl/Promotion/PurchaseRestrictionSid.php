<?php
namespace WlSdk\Wl\Promotion;

/**
 * Purchase restrictions.
 * 
 * Last used ID: 3.
 * 
 * Values:
 * - 1 (`ALL`): Purchase option available for all clients.
 * - 2 (`INTRODUCTORY`): Purchase option introductory offer, available for new clients only.
 * - 3 (`TYPE`): Purchase option available for clients with special login type or member group.
 */
enum PurchaseRestrictionSid: int
{
    case ALL = 1;
    case INTRODUCTORY = 2;
    case TYPE = 3;
}
