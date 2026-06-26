<?php

namespace WlSdk;

/**
 * Transaction statuses.
 *
 * Last used ID: 15.
 *
 * Values:
 * - 8 (`AUTHORIZE_ACTIVE`): The authorization or store transaction is being performed now.
 * - 10 (`AUTHORIZE_ERROR`): Authorization or store transaction is completed with errors.
 * - 9 (`AUTHORIZE_OK`): Authorization or store transaction is completed successfully.
 * - 1 (`PURCHASE_ACTIVE`): The transaction is being performed now.
 * - 3 (`PURCHASE_ERROR`): Transaction is completed with errors.
 * - 15 (`PURCHASE_FAILED`): Transaction is completed successfully, but the purchase wasn't finished (failed by a
 * temporary error).
 *   The purchase was stuck in [RsPurchaseStatusSid::PAY](#/components/schemas/RsPurchaseStatusSid) state.
 *
 *   **Important note** Used only for indexation data for the reports.
 * - 2 (`PURCHASE_OK`): Transaction is completed successfully.
 * - 14 (`PURCHASE_OK_HIDDEN`): Transaction is completed successfully, but should be hidden from reports.
 *
 *   This status is set only in specific cases during import.
 * - 11 (`PURCHASE_WAIT`): We are waiting when financial institution (e.g. bank) will process our transaction. For
 * example, cheques or bank
 *   account transactions can be processed not immediately but after some time (e.g. 3-4 days).
 * - 5 (`REFUND_ACTIVE`): Transaction is being refunded now, and previous status was successful payment.
 * - 13 (`REFUND_ACTIVE_WAIT`): Transaction is being refunded now.
 *
 *   Exactly the same as [RsPayTransactionStatusSid::REFUND_ACTIVE](#/components/schemas/RsPayTransactionStatusSid),
 * but set if previous status was
 *   [RsPayTransactionStatusSid::PURCHASE_WAIT](#/components/schemas/RsPayTransactionStatusSid). In a case of error
 * during refund, this status is changed to
 *   [RsPayTransactionStatusSid::PURCHASE_WAIT](#/components/schemas/RsPayTransactionStatusSid).
 * - 6 (`REFUND_ERROR`): Refund operation has failed.
 *
 *   This status should be treated exactly like
 * [RsPayTransactionStatusSid::PURCHASE_OK](#/components/schemas/RsPayTransactionStatusSid): we've received money
 *   successfully, and did not refund or void transaction.
 *
 *   The difference is that we've tried to refund a successful transaction.
 *
 *   **Important note** If a transaction is refunded partially, it will stay in
 *   [RsPayTransactionStatusSid::REFUND_PARTIAL](#/components/schemas/RsPayTransactionStatusSid) even after an
 * unsuccessful attempt to refund more.
 * - 4 (`REFUND_FULL`): Transaction was refunded fully.
 *
 *   Note that in contrast to REFUND_PARTIAL, there are no items stored in `rs_pay_transaction_refund` table for
 *   transactions in REFUND_FULL status.
 * - 7 (`REFUND_PARTIAL`): Transaction was refunded partially.
 *
 *   This status is set when there is an amount in a transaction that is not refunded.
 * - 12 (`VOID`): Transaction was refunded fully and purchase has been cancelled.
 *
 *   Void is a type of refund with set of limits. The main difference between refund and void is, that during refund we
 *   can cancel transaction before it was settled or we can return money that we have already got. During void of the
 *   transaction we cannot return money, we can only cancel transaction if it has not been settled yet.
 *
 *   This is important because returning of the money is connected to the bank commissions and cancelling the
 *   transaction is a free option. That's why this is two different ways to cancel purchase.
 *
 *   The voided transaction is a transaction that never exists. This also means that purchase that is connected to the
 *   voided transaction should be always erased.
 *
 *   Voiding transaction has sets of limits:<ul>
 *     <li>transaction should not be settled;</li>
 *     <li>transaction should not be from internal account balance;</li>
 *     <li>transaction should be single in the purchase.</li>
 *   </ul>
 */
class RsPayTransactionStatusSid
{
    /** The authorization or store transaction is being performed now. */
    public const AUTHORIZE_ACTIVE = 8;

    /** Authorization or store transaction is completed with errors. */
    public const AUTHORIZE_ERROR = 10;

    /** Authorization or store transaction is completed successfully. */
    public const AUTHORIZE_OK = 9;

    /** The transaction is being performed now. */
    public const PURCHASE_ACTIVE = 1;

    /** Transaction is completed with errors. */
    public const PURCHASE_ERROR = 3;

    /** Transaction is completed successfully, but the purchase wasn't finished (failed by a temporary error). */
    public const PURCHASE_FAILED = 15;

    /** Transaction is completed successfully. */
    public const PURCHASE_OK = 2;

    /** Transaction is completed successfully, but should be hidden from reports. */
    public const PURCHASE_OK_HIDDEN = 14;

    /** We are waiting when financial institution (e.g. bank) will process our transaction. For example, cheques or bank */
    public const PURCHASE_WAIT = 11;

    /** Transaction is being refunded now, and previous status was successful payment. */
    public const REFUND_ACTIVE = 5;

    /** Transaction is being refunded now. */
    public const REFUND_ACTIVE_WAIT = 13;

    /** Refund operation has failed. */
    public const REFUND_ERROR = 6;

    /** Transaction was refunded fully. */
    public const REFUND_FULL = 4;

    /** Transaction was refunded partially. */
    public const REFUND_PARTIAL = 7;

    /** Transaction was refunded fully and purchase has been cancelled. */
    public const VOID = 12;
}
