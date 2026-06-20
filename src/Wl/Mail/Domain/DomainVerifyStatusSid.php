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
enum DomainVerifyStatusSid: int
{
    case FAIL = 2;
    case PENDING = 1;
    case SUCCESS = 3;
}
