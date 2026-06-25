<?php

namespace WlSdk\Wl\Business\Claim;

/**
 * Business status for managing claim request behavior.
 *
 * Last used ID: 4
 *
 * Values:
 * - 4 (`CHURN`): Business HAD a contract with WL, but decided not to continue it, i.e. it is a churned business, or a
 * business
 *   with the trial expired.
 * - 3 (`CUSTOMER`): Business has a contract with WL, be it a trial (with all fields updated and actual), or a
 * subscription.
 * - 1 (`PROSPECT`): Business is not a WL client and never was, i.e. it is a true prospect business.
 * - 2 (`UNVERIFY`): Business claiming process started, the contact information was verified, the trial has started,
 * but company
 *   information wasn’t yet updated.
 */
class BusinessClaimStatusSid
{
    /** Business HAD a contract with WL, but decided not to continue it, i.e. it is a churned business, or a business */
    public const CHURN = 4;

    /** Business has a contract with WL, be it a trial (with all fields updated and actual), or a subscription. */
    public const CUSTOMER = 3;

    /** Business is not a WL client and never was, i.e. it is a true prospect business. */
    public const PROSPECT = 1;

    /** Business claiming process started, the contact information was verified, the trial has started, but company */
    public const UNVERIFY = 2;
}
