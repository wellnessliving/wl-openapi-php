<?php
namespace WlSdk\Wl\Business\Account\Subscription\Base;

/**
 * List of possible plans for
 * [BaseSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * 
 * 
 * Last used ID: 15.
 * 
 * Values:
 * - 4 (`ADVANCED`): Advanced
 * - 3 (`BASIC`): Basic
 * - 7 (`BUSINESS`): Business(Legacy)
 * - 11 (`BUSINESS_2405`): Business
 * - 8 (`BUSINESS_LIGHT`): Business(Legacy)
 * - 9 (`BUSINESS_MAX`): Business Max
 * - 10 (`BUSINESS_PRO`): Business Pro
 * - 6 (`ENTERPRISE`): Enterprise
 * - 1 (`FREE`): None
 * - 2 (`PARTNER`): Business Partner
 * - 15 (`PLATFORM_ACCESS`): Platform Access
 * - 5 (`PROFESSIONAL`): Professional
 * - 12 (`STARTER`): Starter
 * - 13 (`STARTER_2502`): Starter
 * - 14 (`TRIAL`): Trial
 */
enum BaseSubscriptionSid: int
{
    case ADVANCED = 4;
    case BASIC = 3;
    case BUSINESS = 7;
    case BUSINESS_2405 = 11;
    case BUSINESS_LIGHT = 8;
    case BUSINESS_MAX = 9;
    case BUSINESS_PRO = 10;
    case ENTERPRISE = 6;
    case FREE = 1;
    case PARTNER = 2;
    case PLATFORM_ACCESS = 15;
    case PROFESSIONAL = 5;
    case STARTER = 12;
    case STARTER_2502 = 13;
    case TRIAL = 14;
}
