<?php
namespace WlSdk\Wl\Coupon;

/**
 * List of possible types of Gift Cards.
 * 
 * Values:
 * - 2 (`AMOUNT`): Amount Gift Card.
 *   Only one card of this type can be created in one business.
 * - 1 (`COMPONENT`): Product Gift Card.
 *   Many cards of this type can be created in one business.
 *   Each card contains list of products.
 * - 3 (`QUICK`): Quick Gift Card.
 *   Only one card of this type can be created in one business.
 */
enum TypeSid: int
{
    case AMOUNT = 2;
    case COMPONENT = 1;
    case QUICK = 3;
}
