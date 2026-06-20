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
class CardTypeEnum
{
    /** Credit Card. */
    public const CREDIT = 1;

    /** Debit Card. */
    public const DEBIT = 2;
}
