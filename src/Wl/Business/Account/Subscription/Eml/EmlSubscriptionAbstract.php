<?php

namespace WlSdk\Wl\Business\Account\Subscription\Eml;

/**
 * Email marketing services.
 *
 * Values:
 * - 1965 (`Wl\Business\Account\Subscription\Email\EmailSubscription`): Email marketing services.
 * - 2166 (`Wl\Business\Account\Subscription\Eml\ConstantContactSubscription`): Eml marketing subscription for
 * `ConstantContact` integration.
 * - 2165 (`Wl\Business\Account\Subscription\Eml\MailchimpSubscription`): Eml marketing subscription for `Mailchimp`
 * integration.
 */
class EmlSubscriptionAbstract
{
    /** Email marketing services. */
    public const EmailSubscription = 1965;

    /** Eml marketing subscription for `ConstantContact` integration. */
    public const ConstantContactSubscription = 2166;

    /** Eml marketing subscription for `Mailchimp` integration. */
    public const MailchimpSubscription = 2165;
}
