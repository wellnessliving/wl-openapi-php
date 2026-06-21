<?php

namespace WlSdk\Wl\Mail\Domain;

/**
 * Statuses of domain verification.
 * Based on the statuses that return Amazon SES API.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 2 (`FAIL`): Domain is not verified.
 * - 1 (`PENDING`): Domain verification is pending.
 *   This is the initial state of the domain verification.
 *   After state should be changed to
 * [DomainVerifyStatusSid::FAIL](#/components/schemas/Wl.Mail.Domain.DomainVerifyStatusSid) or
 * [DomainVerifyStatusSid::SUCCESS](#/components/schemas/Wl.Mail.Domain.DomainVerifyStatusSid).
 * - 3 (`SUCCESS`): Domain is verified.
 */
class DomainVerifyStatusSid
{
    /** Domain is not verified. */
    public const FAIL = 2;

    /** Domain verification is pending. */
    public const PENDING = 1;

    /** Domain is verified. */
    public const SUCCESS = 3;
}
