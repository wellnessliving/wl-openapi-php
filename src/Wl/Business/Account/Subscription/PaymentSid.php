<?php

namespace WlSdk\Wl\Business\Account\Subscription;

/**
 * List of payment types.
 * At one time there can be several different payments for one subscription type.
 *
 * Values:
 * - 2 (`ANNUAL`): Additional annual payment.
 * - 1 (`REGULAR`): Regular payment according subscription plan.
 */
class PaymentSid
{
    /** Additional annual payment. */
    public const ANNUAL = 2;

    /** Regular payment according subscription plan. */
    public const REGULAR = 1;
}
