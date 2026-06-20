<?php
namespace WlSdk\Wl\Pay\Bank\Card;

/**
 * An enum of credit card types.
 * 
 * Last used ID: 2
 * 
 * Values:
 * - 1 (`CREDIT`): Credit Card.
 * - 2 (`DEBIT`): Debit Card.
 */
enum CardTypeEnum: int
{
    case CREDIT = 1;
    case DEBIT = 2;
}
