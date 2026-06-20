<?php
namespace WlSdk\Wl\Business\Account\Subscription\Eml;

/**
 * List of possible plans for
 * [MailchimpSubscription](#/components/schemas/Wl.Business.Account.Subscription.Eml.EmlSubscriptionAbstract)
 * subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`STANDARD`): Standard
 */
class MailchimpSubscriptionSid
{
    /** None */
    const FREE = 1;
    /** Standard */
    const STANDARD = 2;
}
