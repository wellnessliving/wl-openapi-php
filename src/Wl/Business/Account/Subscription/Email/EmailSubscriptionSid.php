<?php
namespace WlSdk\Wl\Business\Account\Subscription\Email;

/**
 * List of possible plans for
 * [EmailSubscription](#/components/schemas/Wl.Business.Account.Subscription.Eml.EmlSubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`STANDARD`): Standard
 */
enum EmailSubscriptionSid: int
{
    case FREE = 1;
    case STANDARD = 2;
}
