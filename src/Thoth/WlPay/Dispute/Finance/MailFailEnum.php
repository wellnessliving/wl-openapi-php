<?php

namespace WlSdk\Thoth\WlPay\Dispute\Finance;

/**
 * The step of the funds of a Stripe dispute that failed, and that Finance must do by hand.
 *
 * Stored in the column `id_fail` of StripeDisputeSql and given to
 * Mail::send(). The code does not repeat a failed step, see
 * StripeDisputeFunds.
 *
 * Last used ID: 3
 *
 * Values:
 * - 3 (`REINSTATED`): The funds came back to the platform, but the code did not recover them from the studio.
 * - 2 (`REPAY`): The studio was not repaid after a won dispute.
 * - 1 (`REVERSE`): The transfer of the disputed payment was not reversed.
 */
class MailFailEnum
{
    /** The funds came back to the platform, but the code did not recover them from the studio. */
    public const REINSTATED = 3;

    /** The studio was not repaid after a won dispute. */
    public const REPAY = 2;

    /** The transfer of the disputed payment was not reversed. */
    public const REVERSE = 1;
}
