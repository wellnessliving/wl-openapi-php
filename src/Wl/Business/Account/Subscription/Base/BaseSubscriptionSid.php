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
class BaseSubscriptionSid
{
    /** Advanced */
    const ADVANCED = 4;
    /** Basic */
    const BASIC = 3;
    /** Business(Legacy) */
    const BUSINESS = 7;
    /** Business */
    const BUSINESS_2405 = 11;
    /** Business(Legacy) */
    const BUSINESS_LIGHT = 8;
    /** Business Max */
    const BUSINESS_MAX = 9;
    /** Business Pro */
    const BUSINESS_PRO = 10;
    /** Enterprise */
    const ENTERPRISE = 6;
    /** None */
    const FREE = 1;
    /** Business Partner */
    const PARTNER = 2;
    /** Platform Access */
    const PLATFORM_ACCESS = 15;
    /** Professional */
    const PROFESSIONAL = 5;
    /** Starter */
    const STARTER = 12;
    /** Starter */
    const STARTER_2502 = 13;
    /** Trial */
    const TRIAL = 14;
}
