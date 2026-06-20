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
enum MailchimpSubscriptionSid: int
{
    case FREE = 1;
    case STANDARD = 2;
}
