<?php

namespace WlSdk\Thoth\PayProcessor\DirectConnect\Transaction;

/**
 * A list of `PureCloud` transaction types.
 *
 * Last used ID 11.
 *
 * Values:
 * - 10 (`ADJUSTMENT`): Adjust transaction.
 * - 11 (`TOKENIZE`): Card tokenization.
 * - 1 (`AUTH`): Card authorization.
 * - 3 (`FORCE`): Force transaction.
 * - 5 (`RETURN_TRANSACTION`): Return transaction.
 * - 6 (`REVERSAL`): Reversal transaction.
 * - 2 (`SALE`): Sale transaction.
 * - 7 (`VOID`): Void transaction.
 */
class PureCloudTransactionTypeSid
{
    /** Adjust transaction. */
    public const ADJUSTMENT = 10;

    /** Card tokenization. */
    public const TOKENIZE = 11;

    /** Card authorization. */
    public const AUTH = 1;

    /** Force transaction. */
    public const FORCE = 3;

    /** Return transaction. */
    public const RETURN_TRANSACTION = 5;

    /** Reversal transaction. */
    public const REVERSAL = 6;

    /** Sale transaction. */
    public const SALE = 2;

    /** Void transaction. */
    public const VOID = 7;
}
