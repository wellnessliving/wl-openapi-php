<?php

namespace WlSdk\Wl\Business\Account\Subscription;

/**
 * Subscription manager.
 *
 * Values:
 * - 2331 (`Wl\Business\Account\Subscription\QuickBooks\QuickBooksSubscription`): Quickbooks Suite subscription.
 * - 1868 (`Wl\Business\Account\Subscription\AiAgent\AiAgentSubscription`):
 * Wl\Business\Account\Subscription\AiAgent\AiAgentSubscription
 * - 1250 (`Wl\Business\Account\Subscription\Collections\CollectionsSubscription`): Class for "Collections"
 * subscription.
 * - 1965 (`Wl\Business\Account\Subscription\Email\EmailSubscription`): Email marketing services.
 * - 2166 (`Wl\Business\Account\Subscription\Eml\ConstantContactSubscription`): Eml marketing subscription for
 * `ConstantContact` integration.
 * - 2165 (`Wl\Business\Account\Subscription\Eml\MailchimpSubscription`): Eml marketing subscription for `Mailchimp`
 * integration.
 * - 1838 (`Wl\Business\Account\Subscription\MarketingSuite\MarketingSuiteSubscription`): Marketing Suite subscription.
 * - 857 (`Wl\Business\Account\Subscription\Sms\SmsSubscription`): Wl\Business\Account\Subscription\Sms\SmsSubscription
 * - 858 (`Wl\Business\Account\Subscription\Achieve\AchieveSubscription`):
 * Wl\Business\Account\Subscription\Achieve\AchieveSubscription
 * - 861 (`Wl\Business\Account\Subscription\Base\BaseSubscription`): Base subscription settings reader.
 * - 1225 (`Wl\Business\Account\Subscription\Finance\FinanceSubscription`):
 * Wl\Business\Account\Subscription\Finance\FinanceSubscription
 * - 1964 (`Wl\Business\Account\Subscription\GoHighLevel\GoHighLevelSubscription`): Marketing Suite subscription.
 * - 1349 (`Wl\Business\Account\Subscription\Zapier\ZapierSubscription`): Class for "Zapier" subscription.
 * - 986 (`Wl\Business\Account\Subscription\Fitlive\FitliveSubscription`): Subscription allows business to access
 * virtual sessions features.
 *   Unlikely {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract} virtual sessions provided also by
 * system Zoom account.
 * - 862 (`Wl\Business\Account\Subscription\Postcard\PostcardSubscription`): Postcard subscription settings reader.
 * - 2225 (`Wl\Business\Account\Subscription\BusinessCoach\BusinessCoachSubscription`): Business Success Coaching.
 *
 *   Does not change or open any functional. Just financial subscription.
 * - 1370 (`Wl\Business\Account\Subscription\Door\DoorSubscription`): Subscription manager.
 * - 883 (`Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscription`):
 * Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscription
 * - 886 (`Wl\Business\Account\Subscription\Reward\RewardSubscription`): Rewards and loyalty subscription settings
 * reader.
 * - 1266 (`Wl\Business\Account\Subscription\Api\ApiSubscription`): Api subscription settings reader.
 * - 875 (`Wl\Business\Account\Subscription\Fitvid\FitvidSubscription`):
 * Wl\Business\Account\Subscription\Fitvid\FitvidSubscription
 * - 1133 (`Wl\Business\Account\Subscription\Quiz\QuizSubscription`):
 * Wl\Business\Account\Subscription\Quiz\QuizSubscription
 * - 863 (`Wl\Business\Account\Subscription\Website\WebsiteSubscription`): Website subscription.
 * - 864 (`Wl\Business\Account\Subscription\Zoom\ZoomSubscription`): Zoom subscription.
 * - 884 (`Wl\Business\Account\Subscription\Fitzone\FitzoneSubscription`):
 * Wl\Business\Account\Subscription\Fitzone\FitzoneSubscription
 * - 885 (`Wl\Business\Account\Subscription\Review\ReviewSubscription`):
 * Wl\Business\Account\Subscription\Review\ReviewSubscription
 * - 882 (`Wl\Business\Account\Subscription\Asset\AssetSubscription`): Asset subscription settings reader.
 */
class SubscriptionAbstract
{
    /** Quickbooks Suite subscription. */
    public const QuickBooksSubscription = 2331;

    /** Wl\Business\Account\Subscription\AiAgent\AiAgentSubscription */
    public const AiAgentSubscription = 1868;

    /** Class for "Collections" subscription. */
    public const CollectionsSubscription = 1250;

    /** Email marketing services. */
    public const EmailSubscription = 1965;

    /** Eml marketing subscription for `ConstantContact` integration. */
    public const ConstantContactSubscription = 2166;

    /** Eml marketing subscription for `Mailchimp` integration. */
    public const MailchimpSubscription = 2165;

    /** Marketing Suite subscription. */
    public const MarketingSuiteSubscription = 1838;

    /** Wl\Business\Account\Subscription\Sms\SmsSubscription */
    public const SmsSubscription = 857;

    /** Wl\Business\Account\Subscription\Achieve\AchieveSubscription */
    public const AchieveSubscription = 858;

    /** Base subscription settings reader. */
    public const BaseSubscription = 861;

    /** Wl\Business\Account\Subscription\Finance\FinanceSubscription */
    public const FinanceSubscription = 1225;

    /** Marketing Suite subscription. */
    public const GoHighLevelSubscription = 1964;

    /** Class for "Zapier" subscription. */
    public const ZapierSubscription = 1349;

    /** Subscription allows business to access virtual sessions features. */
    public const FitliveSubscription = 986;

    /** Postcard subscription settings reader. */
    public const PostcardSubscription = 862;

    /** Business Success Coaching. */
    public const BusinessCoachSubscription = 2225;

    /** Subscription manager. */
    public const DoorSubscription = 1370;

    /** Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscription */
    public const FitbuilderSubscription = 883;

    /** Rewards and loyalty subscription settings reader. */
    public const RewardSubscription = 886;

    /** Api subscription settings reader. */
    public const ApiSubscription = 1266;

    /** Wl\Business\Account\Subscription\Fitvid\FitvidSubscription */
    public const FitvidSubscription = 875;

    /** Wl\Business\Account\Subscription\Quiz\QuizSubscription */
    public const QuizSubscription = 1133;

    /** Website subscription. */
    public const WebsiteSubscription = 863;

    /** Zoom subscription. */
    public const ZoomSubscription = 864;

    /** Wl\Business\Account\Subscription\Fitzone\FitzoneSubscription */
    public const FitzoneSubscription = 884;

    /** Wl\Business\Account\Subscription\Review\ReviewSubscription */
    public const ReviewSubscription = 885;

    /** Asset subscription settings reader. */
    public const AssetSubscription = 882;
}
