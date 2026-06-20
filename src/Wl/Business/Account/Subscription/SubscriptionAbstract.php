<?php
namespace WlSdk\Wl\Business\Account\Subscription;

/**
 * Subscription manager.
 * 
 * Values:
 * - 1868 (`Wl\Business\Account\Subscription\AiAgent\AiAgentSubscription`):
 * Wl\Business\Account\Subscription\AiAgent\AiAgentSubscription
 * - 858 (`Wl\Business\Account\Subscription\Achieve\AchieveSubscription`):
 * Wl\Business\Account\Subscription\Achieve\AchieveSubscription
 * - 861 (`Wl\Business\Account\Subscription\Base\BaseSubscription`): Base subscription settings reader.
 * - 857 (`Wl\Business\Account\Subscription\Sms\SmsSubscription`): Wl\Business\Account\Subscription\Sms\SmsSubscription
 * - 986 (`Wl\Business\Account\Subscription\Fitlive\FitliveSubscription`): Subscription allows business to access
 * virtual sessions features.
 *   Unlikely [ZoomSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) virtual
 * sessions provided also by system Zoom account.
 * - 864 (`Wl\Business\Account\Subscription\Zoom\ZoomSubscription`): Zoom subscription.
 * - 1225 (`Wl\Business\Account\Subscription\Finance\FinanceSubscription`):
 * Wl\Business\Account\Subscription\Finance\FinanceSubscription
 * - 883 (`Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscription`):
 * Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscription
 * - 875 (`Wl\Business\Account\Subscription\Fitvid\FitvidSubscription`):
 * Wl\Business\Account\Subscription\Fitvid\FitvidSubscription
 * - 884 (`Wl\Business\Account\Subscription\Fitzone\FitzoneSubscription`):
 * Wl\Business\Account\Subscription\Fitzone\FitzoneSubscription
 * - 1838 (`Wl\Business\Account\Subscription\MarketingSuite\MarketingSuiteSubscription`): Marketing Suite subscription.
 * - 862 (`Wl\Business\Account\Subscription\Postcard\PostcardSubscription`): Postcard subscription settings reader.
 * - 1133 (`Wl\Business\Account\Subscription\Quiz\QuizSubscription`):
 * Wl\Business\Account\Subscription\Quiz\QuizSubscription
 * - 885 (`Wl\Business\Account\Subscription\Review\ReviewSubscription`):
 * Wl\Business\Account\Subscription\Review\ReviewSubscription
 * - 886 (`Wl\Business\Account\Subscription\Reward\RewardSubscription`): Rewards and loyalty subscription settings
 * reader.
 * - 863 (`Wl\Business\Account\Subscription\Website\WebsiteSubscription`): Website subscription.
 * - 882 (`Wl\Business\Account\Subscription\Asset\AssetSubscription`): Asset subscription settings reader.
 * - 1370 (`Wl\Business\Account\Subscription\Door\DoorSubscription`): Subscription manager.
 * - 1266 (`Wl\Business\Account\Subscription\Api\ApiSubscription`): Api subscription settings reader.
 * - 1349 (`Wl\Business\Account\Subscription\Zapier\ZapierSubscription`): Class for "Zapier" subscription.
 * - 1250 (`Wl\Business\Account\Subscription\Collections\CollectionsSubscription`): Class for "Collections"
 * subscription.
 * - 1964 (`Wl\Business\Account\Subscription\GoHighLevel\GoHighLevelSubscription`): Marketing Suite subscription.
 * - 1965 (`Wl\Business\Account\Subscription\Email\EmailSubscription`): Email marketing services.
 * - 2166 (`Wl\Business\Account\Subscription\Eml\ConstantContactSubscription`): Eml marketing subscription for
 * `ConstantContact` integration.
 * - 2165 (`Wl\Business\Account\Subscription\Eml\MailchimpSubscription`): Eml marketing subscription for `Mailchimp`
 * integration.
 * - 2225 (`Wl\Business\Account\Subscription\BusinessCoach\BusinessCoachSubscription`): Business Success Coaching.
 * 
 *   Does not change or open any functional. Just financial subscription.
 */
class SubscriptionAbstract
{
    /** Wl\Business\Account\Subscription\AiAgent\AiAgentSubscription */
    const Wl\Business\Account\Subscription\AiAgent\AiAgentSubscription = 1868;
    /** Wl\Business\Account\Subscription\Achieve\AchieveSubscription */
    const Wl\Business\Account\Subscription\Achieve\AchieveSubscription = 858;
    /** Base subscription settings reader. */
    const Wl\Business\Account\Subscription\Base\BaseSubscription = 861;
    /** Wl\Business\Account\Subscription\Sms\SmsSubscription */
    const Wl\Business\Account\Subscription\Sms\SmsSubscription = 857;
    /** Subscription allows business to access virtual sessions features. */
    const Wl\Business\Account\Subscription\Fitlive\FitliveSubscription = 986;
    /** Zoom subscription. */
    const Wl\Business\Account\Subscription\Zoom\ZoomSubscription = 864;
    /** Wl\Business\Account\Subscription\Finance\FinanceSubscription */
    const Wl\Business\Account\Subscription\Finance\FinanceSubscription = 1225;
    /** Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscription */
    const Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscription = 883;
    /** Wl\Business\Account\Subscription\Fitvid\FitvidSubscription */
    const Wl\Business\Account\Subscription\Fitvid\FitvidSubscription = 875;
    /** Wl\Business\Account\Subscription\Fitzone\FitzoneSubscription */
    const Wl\Business\Account\Subscription\Fitzone\FitzoneSubscription = 884;
    /** Marketing Suite subscription. */
    const Wl\Business\Account\Subscription\MarketingSuite\MarketingSuiteSubscription = 1838;
    /** Postcard subscription settings reader. */
    const Wl\Business\Account\Subscription\Postcard\PostcardSubscription = 862;
    /** Wl\Business\Account\Subscription\Quiz\QuizSubscription */
    const Wl\Business\Account\Subscription\Quiz\QuizSubscription = 1133;
    /** Wl\Business\Account\Subscription\Review\ReviewSubscription */
    const Wl\Business\Account\Subscription\Review\ReviewSubscription = 885;
    /** Rewards and loyalty subscription settings reader. */
    const Wl\Business\Account\Subscription\Reward\RewardSubscription = 886;
    /** Website subscription. */
    const Wl\Business\Account\Subscription\Website\WebsiteSubscription = 863;
    /** Asset subscription settings reader. */
    const Wl\Business\Account\Subscription\Asset\AssetSubscription = 882;
    /** Subscription manager. */
    const Wl\Business\Account\Subscription\Door\DoorSubscription = 1370;
    /** Api subscription settings reader. */
    const Wl\Business\Account\Subscription\Api\ApiSubscription = 1266;
    /** Class for "Zapier" subscription. */
    const Wl\Business\Account\Subscription\Zapier\ZapierSubscription = 1349;
    /** Class for "Collections" subscription. */
    const Wl\Business\Account\Subscription\Collections\CollectionsSubscription = 1250;
    /** Marketing Suite subscription. */
    const Wl\Business\Account\Subscription\GoHighLevel\GoHighLevelSubscription = 1964;
    /** Email marketing services. */
    const Wl\Business\Account\Subscription\Email\EmailSubscription = 1965;
    /** Eml marketing subscription for `ConstantContact` integration. */
    const Wl\Business\Account\Subscription\Eml\ConstantContactSubscription = 2166;
    /** Eml marketing subscription for `Mailchimp` integration. */
    const Wl\Business\Account\Subscription\Eml\MailchimpSubscription = 2165;
    /** Business Success Coaching. */
    const Wl\Business\Account\Subscription\BusinessCoach\BusinessCoachSubscription = 2225;
}
