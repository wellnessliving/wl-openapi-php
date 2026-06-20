<?php
namespace WlSdk\Wl\Business\Account\Subscription\Eml;

/**
 * List of possible plans for
 * [ConstantContactSubscription](#/components/schemas/Wl.Business.Account.Subscription.Eml.EmlSubscriptionAbstract)
 * subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`STANDARD`): Standard
 */
enum ConstantContactSubscriptionSid: int
{
    case FREE = 1;
    case STANDARD = 2;
}
